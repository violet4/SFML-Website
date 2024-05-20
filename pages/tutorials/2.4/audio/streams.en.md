# Custom audio streams

## Audio stream? What's that?

An audio stream is similar to music (remember the [`sf::Music`](https://www.sfml-dev.org/documentation/2.6.0/classsf_1_1Music.php "sf::Music documentation") class?). It has almost the same functions and behaves the same. The only difference is that an audio stream doesn't play an audio file: Instead, it plays a custom audio source that _you_ directly provide. In other words, defining your own audio stream allows you to play from more than just a file: A sound streamed over the network, music generated by your program, an audio format that SFML doesn't support, etc.

In fact, the [`sf::Music`](https://www.sfml-dev.org/documentation/2.6.0/classsf_1_1Music.php "sf::Music documentation") class is just a specialized audio stream that gets its audio samples from a file.

Since we're talking about _streaming_, we'll deal with audio data that cannot be loaded entirely in memory, and will instead be loaded in small chunks while it is being played. If your sound can be loaded completely and can fit in memory, then audio streams won't help you: Just load the audio data into a [`sf::SoundBuffer`](https://www.sfml-dev.org/documentation/2.6.0/classsf_1_1SoundBuffer.php "sf::SoundBuffer documentation") and use a regular [`sf::Sound`](https://www.sfml-dev.org/documentation/2.6.0/classsf_1_1Sound.php "sf::Sound documentation") to play it.

## sf::SoundStream

In order to define your own audio stream, you need to inherit from the [`sf::SoundStream`](https://www.sfml-dev.org/documentation/2.6.0/classsf_1_1SoundStream.php "sf::SoundStream documentation") abstract base class. There are two virtual functions to override in your derived class: `onGetData` and `onSeek`.

```
class MyAudioStream : public sf::SoundStream
{
    virtual bool onGetData(Chunk& data);

    virtual void onSeek(sf::Time timeOffset);
};
```

`onGetData` is called by the base class whenever it runs out of audio samples and needs more of them. You must provide new audio samples by filling the `data` argument:

```
bool MyAudioStream::onGetData(Chunk& data)
{
    data.samples = /* put the pointer to the new audio samples */;
    data.sampleCount = /* put the number of audio samples available in the new chunk */;
    return true;
}
```

You must return `true` when everything is all right, or `false` if playback must be stopped, either because an error has occurred or because there's simply no more audio data to play.

SFML makes an internal copy of the audio samples as soon as `onGetData` returns, so you don't have to keep the original data alive if you don't want to.

The `onSeek` function is called when the `setPlayingOffset` public function is called. Its purpose is to change the current playing position in the source data. The parameter is a time value representing the new position, from the beginning of the sound (_not_ from the current position). This function is sometimes impossible to implement. In those cases leave it empty, and tell the users of your class that changing the playing position is not supported.

Now your class is almost ready to work. The only thing that [`sf::SoundStream`](https://www.sfml-dev.org/documentation/2.6.0/classsf_1_1SoundStream.php "sf::SoundStream documentation") needs to know now is the channel count and sample rate of your stream, so that it can be played as expected. To let the base class know about these parameters, you must call the `initialize` protected function as soon as they are known in your stream class (which is most likely when the stream is loaded/initialized).

```
// where this is done totally depends on how your stream class is designed
unsigned int channelCount = ...;
unsigned int sampleRate = ...;
initialize(channelCount, sampleRate);
```

## Threading issues

Audio streams are always played in a separate thread, therefore it is important to know what happens exactly, and where.

`onSeek` is called directly by the `setPlayingOffset` function, so it is always executed in the caller thread. However, the `onGetData` function will be called repeatedly as long as the stream is being played, in a separate thread created by SFML. If your stream uses data that may be accessed _concurrently_ in both the caller thread and in the playing thread, you have to protect it (with a mutex for example) in order to avoid concurrent access, which may cause undefined behavior -- corrupt data being played, crashes, etc.

If you're not familiar enough with threading, you can refer to the [corresponding tutorial](https://www.sfml-dev.org/tutorials/2.6/system-thread.php "Threading tutorial") for more information.

## Using your audio stream

Now that you have defined your own audio stream class, let's see how to use it. In fact, things are very similar to what's shown in the [tutorial about sf::Music](https://www.sfml-dev.org/tutorials/2.6/audio-sounds.php "Playing sounds and musics"). You can control playback with the `play`, `pause`, `stop` and `setPlayingOffset` functions. You can also play with the sound's properties, such as the volume or the pitch. You can refer to the API documentation or to the other audio tutorials for more details.

## A simple example

Here is a very simple example of a custom audio stream class which plays the data of a sound buffer. Such a class might seem totally useless, but the point here is to focus on how the data is streamed by the class, regardless of where it comes from.

```
#include <SFML/Audio.hpp>
#include <vector>

// custom audio stream that plays a loaded buffer
class MyStream : public sf::SoundStream
{
public:

    void load(const sf::SoundBuffer& buffer)
    {
        // extract the audio samples from the sound buffer to our own container
        m_samples.assign(buffer.getSamples(), buffer.getSamples() + buffer.getSampleCount());

        // reset the current playing position 
        m_currentSample = 0;

        // initialize the base class
        initialize(buffer.getChannelCount(), buffer.getSampleRate());
    }

private:

    virtual bool onGetData(Chunk& data)
    {
        // number of samples to stream every time the function is called;
        // in a more robust implementation, it should be a fixed
        // amount of time rather than an arbitrary number of samples
        const int samplesToStream = 50000;

        // set the pointer to the next audio samples to be played
        data.samples = &m_samples[m_currentSample];

        // have we reached the end of the sound?
        if (m_currentSample + samplesToStream <= m_samples.size())
        {
            // end not reached: stream the samples and continue
            data.sampleCount = samplesToStream;
            m_currentSample += samplesToStream;
            return true;
        }
        else
        {
            // end of stream reached: stream the remaining samples and stop playback
            data.sampleCount = m_samples.size() - m_currentSample;
            m_currentSample = m_samples.size();
            return false;
        }
    }

    virtual void onSeek(sf::Time timeOffset)
    {
        // compute the corresponding sample index according to the sample rate and channel count
        m_currentSample = static_cast<std::size_t>(timeOffset.asSeconds() * getSampleRate() * getChannelCount());
    }

    std::vector<sf::Int16> m_samples;
    std::size_t m_currentSample;
};

int main()
{
    // load an audio buffer from a sound file
    sf::SoundBuffer buffer;
    buffer.loadFromFile("sound.wav");

    // initialize and play our custom stream
    MyStream stream;
    stream.load(buffer);
    stream.play();

    // let it play until it is finished
    while (stream.getStatus() == MyStream::Playing)
        sf::sleep(sf::seconds(0.1f));

    return 0;
}
```