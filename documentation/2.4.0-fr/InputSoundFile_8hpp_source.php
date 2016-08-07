<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'InputSoundFile.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
?>
<!-- Generated by Doxygen 1.8.11 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_d40d7bd09aef4492c34dbfa99aea32ef.php">Audio</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">InputSoundFile.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_INPUTSOUNDFILE_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_INPUTSOUNDFILE_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Audio/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Time.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;</div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;{</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>InputStream;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>SoundFileReader;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="classsf_1_1InputSoundFile.php">   46</a></span>&#160;<span class="keyword">class </span>SFML_AUDIO_API <a class="code" href="classsf_1_1InputSoundFile.php">InputSoundFile</a> : <a class="code" href="classsf_1_1NonCopyable.php">NonCopyable</a></div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;{</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;    <a class="code" href="classsf_1_1InputSoundFile.php">InputSoundFile</a>();</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    ~<a class="code" href="classsf_1_1InputSoundFile.php">InputSoundFile</a>();</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    <span class="keywordtype">bool</span> openFromFile(<span class="keyword">const</span> std::string&amp; filename);</div><div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keywordtype">bool</span> openFromMemory(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t sizeInBytes);</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div><div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;    <span class="keywordtype">bool</span> openFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream);</div><div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;</div><div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;    <span class="keywordtype">bool</span> openForWriting(<span class="keyword">const</span> std::string&amp; filename, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> channelCount, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> sampleRate);</div><div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;    Uint64 getSampleCount() <span class="keyword">const</span>;</div><div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getChannelCount() <span class="keyword">const</span>;</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;</div><div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getSampleRate() <span class="keyword">const</span>;</div><div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;</div><div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;    <a class="code" href="classsf_1_1Time.php">Time</a> getDuration() <span class="keyword">const</span>;</div><div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;</div><div class="line"><a name="l00165"></a><span class="lineno">  165</span>&#160;    <span class="keywordtype">void</span> seek(Uint64 sampleOffset);</div><div class="line"><a name="l00166"></a><span class="lineno">  166</span>&#160;</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <span class="keywordtype">void</span> seek(<a class="code" href="classsf_1_1Time.php">Time</a> timeOffset);</div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;</div><div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;    Uint64 read(Int16* samples, Uint64 maxCount);</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;    <span class="keywordtype">void</span> close();</div><div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;</div><div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1SoundFileReader.php">SoundFileReader</a>* m_reader;       </div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;    <a class="code" href="classsf_1_1InputStream.php">InputStream</a>*     m_stream;       </div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    <span class="keywordtype">bool</span>             m_streamOwned;  </div><div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;    Uint64           m_sampleCount;  </div><div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>     m_channelCount; </div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span>     m_sampleRate;   </div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;};</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;<span class="preprocessor">#endif // SFML_INPUTSOUNDFILE_HPP</span></div><div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div><div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div><div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Time_php"><div class="ttname"><a href="classsf_1_1Time.php">sf::Time</a></div><div class="ttdoc">Represents a time value. </div><div class="ttdef"><b>Definition:</b> <a href="Time_8hpp_source.php#l00040">Time.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1InputSoundFile_php"><div class="ttname"><a href="classsf_1_1InputSoundFile.php">sf::InputSoundFile</a></div><div class="ttdoc">Provide read access to sound files. </div><div class="ttdef"><b>Definition:</b> <a href="InputSoundFile_8hpp_source.php#l00046">InputSoundFile.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1NonCopyable_php"><div class="ttname"><a href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></div><div class="ttdoc">Utility class that makes any derived class non-copyable. </div><div class="ttdef"><b>Definition:</b> <a href="NonCopyable_8hpp_source.php#l00041">NonCopyable.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1SoundFileReader_php"><div class="ttname"><a href="classsf_1_1SoundFileReader.php">sf::SoundFileReader</a></div><div class="ttdoc">Abstract base class for sound file decoding. </div><div class="ttdef"><b>Definition:</b> <a href="SoundFileReader_8hpp_source.php#l00043">SoundFileReader.hpp:43</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
