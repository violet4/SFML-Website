<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Texture.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_25140c63874fec7ab1624ad7e074f505.php">Graphics</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Texture.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_TEXTURE_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_TEXTURE_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Image.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>Window;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>RenderTarget;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>RenderTexture;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">class </span>InputStream;</div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php">   47</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Texture.php">Texture</a> : <a class="code" href="classsf_1_1GlResource.php">GlResource</a></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;{</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;</div><div class="line"><a name="l00055"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">   55</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">CoordinateType</a></div><div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;    {</div><div class="line"><a name="l00057"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73">   57</a></span>&#160;        <a class="code" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73">Normalized</a>, </div><div class="line"><a name="l00058"></a><span class="lineno"><a class="line" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea6372f9c3a10203a7a69d8d5da59d82ff">   58</a></span>&#160;        Pixels      </div><div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;    };</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;</div><div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;    <a class="code" href="classsf_1_1Texture.php">Texture</a>();</div><div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <a class="code" href="classsf_1_1Texture.php">Texture</a>(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; copy);</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;    ~<a class="code" href="classsf_1_1Texture.php">Texture</a>();</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;</div><div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;    <span class="keywordtype">bool</span> create(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height);</div><div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160;</div><div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;    <span class="keywordtype">bool</span> loadFromFile(<span class="keyword">const</span> std::string&amp; filename, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;</div><div class="line"><a name="l00159"></a><span class="lineno">  159</span>&#160;    <span class="keywordtype">bool</span> loadFromMemory(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00160"></a><span class="lineno">  160</span>&#160;</div><div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;    <span class="keywordtype">bool</span> loadFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;    <span class="keywordtype">bool</span> loadFromImage(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php">Image</a>&amp; image, <span class="keyword">const</span> <a class="code" href="classsf_1_1Rect.php">IntRect</a>&amp; area = <a class="code" href="classsf_1_1Rect.php">IntRect</a>());</div><div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;</div><div class="line"><a name="l00222"></a><span class="lineno">  222</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a> getSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00223"></a><span class="lineno">  223</span>&#160;</div><div class="line"><a name="l00237"></a><span class="lineno">  237</span>&#160;    <a class="code" href="classsf_1_1Image.php">Image</a> copyToImage() <span class="keyword">const</span>;</div><div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;</div><div class="line"><a name="l00255"></a><span class="lineno">  255</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> Uint8* pixels);</div><div class="line"><a name="l00256"></a><span class="lineno">  256</span>&#160;</div><div class="line"><a name="l00277"></a><span class="lineno">  277</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> Uint8* pixels, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> width, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> height, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;</div><div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php">Image</a>&amp; image);</div><div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;</div><div class="line"><a name="l00314"></a><span class="lineno">  314</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Image.php">Image</a>&amp; image, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;</div><div class="line"><a name="l00334"></a><span class="lineno">  334</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Window.php">Window</a>&amp; window);</div><div class="line"><a name="l00335"></a><span class="lineno">  335</span>&#160;</div><div class="line"><a name="l00351"></a><span class="lineno">  351</span>&#160;    <span class="keywordtype">void</span> update(<span class="keyword">const</span> <a class="code" href="classsf_1_1Window.php">Window</a>&amp; window, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> x, <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> y);</div><div class="line"><a name="l00352"></a><span class="lineno">  352</span>&#160;</div><div class="line"><a name="l00367"></a><span class="lineno">  367</span>&#160;    <span class="keywordtype">void</span> setSmooth(<span class="keywordtype">bool</span> smooth);</div><div class="line"><a name="l00368"></a><span class="lineno">  368</span>&#160;</div><div class="line"><a name="l00377"></a><span class="lineno">  377</span>&#160;    <span class="keywordtype">bool</span> isSmooth() <span class="keyword">const</span>;</div><div class="line"><a name="l00378"></a><span class="lineno">  378</span>&#160;</div><div class="line"><a name="l00402"></a><span class="lineno">  402</span>&#160;    <span class="keywordtype">void</span> setSrgb(<span class="keywordtype">bool</span> sRgb);</div><div class="line"><a name="l00403"></a><span class="lineno">  403</span>&#160;</div><div class="line"><a name="l00412"></a><span class="lineno">  412</span>&#160;    <span class="keywordtype">bool</span> isSrgb() <span class="keyword">const</span>;</div><div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;</div><div class="line"><a name="l00436"></a><span class="lineno">  436</span>&#160;    <span class="keywordtype">void</span> setRepeated(<span class="keywordtype">bool</span> repeated);</div><div class="line"><a name="l00437"></a><span class="lineno">  437</span>&#160;</div><div class="line"><a name="l00446"></a><span class="lineno">  446</span>&#160;    <span class="keywordtype">bool</span> isRepeated() <span class="keyword">const</span>;</div><div class="line"><a name="l00447"></a><span class="lineno">  447</span>&#160;</div><div class="line"><a name="l00471"></a><span class="lineno">  471</span>&#160;    <span class="keywordtype">bool</span> generateMipmap();</div><div class="line"><a name="l00472"></a><span class="lineno">  472</span>&#160;</div><div class="line"><a name="l00481"></a><span class="lineno">  481</span>&#160;    <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; operator =(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; right);</div><div class="line"><a name="l00482"></a><span class="lineno">  482</span>&#160;</div><div class="line"><a name="l00493"></a><span class="lineno">  493</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getNativeHandle() <span class="keyword">const</span>;</div><div class="line"><a name="l00494"></a><span class="lineno">  494</span>&#160;</div><div class="line"><a name="l00526"></a><span class="lineno">  526</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> bind(<span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>* texture, <a class="code" href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">CoordinateType</a> coordinateType = Normalized);</div><div class="line"><a name="l00527"></a><span class="lineno">  527</span>&#160;</div><div class="line"><a name="l00538"></a><span class="lineno">  538</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getMaximumSize();</div><div class="line"><a name="l00539"></a><span class="lineno">  539</span>&#160;</div><div class="line"><a name="l00540"></a><span class="lineno">  540</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00541"></a><span class="lineno">  541</span>&#160;</div><div class="line"><a name="l00542"></a><span class="lineno">  542</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1RenderTexture.php">RenderTexture</a>;</div><div class="line"><a name="l00543"></a><span class="lineno">  543</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1RenderTarget.php">RenderTarget</a>;</div><div class="line"><a name="l00544"></a><span class="lineno">  544</span>&#160;</div><div class="line"><a name="l00558"></a><span class="lineno">  558</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getValidSize(<span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> size);</div><div class="line"><a name="l00559"></a><span class="lineno">  559</span>&#160;</div><div class="line"><a name="l00567"></a><span class="lineno">  567</span>&#160;    <span class="keywordtype">void</span> invalidateMipmap();</div><div class="line"><a name="l00568"></a><span class="lineno">  568</span>&#160;</div><div class="line"><a name="l00570"></a><span class="lineno">  570</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00572"></a><span class="lineno">  572</span>&#160;<span class="comment"></span>    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>     m_size;          </div><div class="line"><a name="l00573"></a><span class="lineno">  573</span>&#160;    <a class="code" href="classsf_1_1Vector2.php">Vector2u</a>     m_actualSize;    </div><div class="line"><a name="l00574"></a><span class="lineno">  574</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_texture;       </div><div class="line"><a name="l00575"></a><span class="lineno">  575</span>&#160;    <span class="keywordtype">bool</span>         m_isSmooth;      </div><div class="line"><a name="l00576"></a><span class="lineno">  576</span>&#160;    <span class="keywordtype">bool</span>         m_sRgb;          </div><div class="line"><a name="l00577"></a><span class="lineno">  577</span>&#160;    <span class="keywordtype">bool</span>         m_isRepeated;    </div><div class="line"><a name="l00578"></a><span class="lineno">  578</span>&#160;    <span class="keyword">mutable</span> <span class="keywordtype">bool</span> m_pixelsFlipped; </div><div class="line"><a name="l00579"></a><span class="lineno">  579</span>&#160;    <span class="keywordtype">bool</span>         m_fboAttachment; </div><div class="line"><a name="l00580"></a><span class="lineno">  580</span>&#160;    <span class="keywordtype">bool</span>         m_hasMipmap;     </div><div class="line"><a name="l00581"></a><span class="lineno">  581</span>&#160;    Uint64       m_cacheId;       </div><div class="line"><a name="l00582"></a><span class="lineno">  582</span>&#160;};</div><div class="line"><a name="l00583"></a><span class="lineno">  583</span>&#160;</div><div class="line"><a name="l00584"></a><span class="lineno">  584</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00585"></a><span class="lineno">  585</span>&#160;</div><div class="line"><a name="l00586"></a><span class="lineno">  586</span>&#160;</div><div class="line"><a name="l00587"></a><span class="lineno">  587</span>&#160;<span class="preprocessor">#endif // SFML_TEXTURE_HPP</span></div><div class="line"><a name="l00588"></a><span class="lineno">  588</span>&#160;</div><div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1GlResource_php"><div class="ttname"><a href="classsf_1_1GlResource.php">sf::GlResource</a></div><div class="ttdoc">Base class for classes that require an OpenGL context. </div><div class="ttdef"><b>Definition:</b> <a href="GlResource_8hpp_source.php#l00040">GlResource.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1RenderTexture_php"><div class="ttname"><a href="classsf_1_1RenderTexture.php">sf::RenderTexture</a></div><div class="ttdoc">Target for off-screen 2D rendering into a texture. </div><div class="ttdef"><b>Definition:</b> <a href="RenderTexture_8hpp_source.php#l00047">RenderTexture.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1Rect_php"><div class="ttname"><a href="classsf_1_1Rect.php">sf::Rect&lt; int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00047">Texture.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1Window_php"><div class="ttname"><a href="classsf_1_1Window.php">sf::Window</a></div><div class="ttdoc">Window that serves as a target for OpenGL rendering. </div><div class="ttdef"><b>Definition:</b> <a href="Window_2Window_8hpp_source.php#l00057">Window/Window.hpp:57</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php_aa6fd3bbe3c334b3c4428edfb2765a82e"><div class="ttname"><a href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82e">sf::Texture::CoordinateType</a></div><div class="ttdeci">CoordinateType</div><div class="ttdoc">Types of texture coordinates that can be used for rendering. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00055">Texture.hpp:55</a></div></div>
<div class="ttc" id="classsf_1_1RenderTarget_php"><div class="ttname"><a href="classsf_1_1RenderTarget.php">sf::RenderTarget</a></div><div class="ttdoc">Base class for all render targets (window, texture, ...) </div><div class="ttdef"><b>Definition:</b> <a href="RenderTarget_8hpp_source.php#l00051">RenderTarget.hpp:51</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; unsigned int &gt;</a></div></div>
<div class="ttc" id="classsf_1_1Image_php"><div class="ttname"><a href="classsf_1_1Image.php">sf::Image</a></div><div class="ttdoc">Class for loading, manipulating and saving images. </div><div class="ttdef"><b>Definition:</b> <a href="Image_8hpp_source.php#l00046">Image.hpp:46</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php_aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73"><div class="ttname"><a href="classsf_1_1Texture.php#aa6fd3bbe3c334b3c4428edfb2765a82ea69d6228950882e4d68be4ba4dbe7df73">sf::Texture::Normalized</a></div><div class="ttdoc">Texture coordinates in range [0 .. 1]. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00057">Texture.hpp:57</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
