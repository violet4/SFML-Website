<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Shader.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<div class="title">Shader.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_SHADER_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_SHADER_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Graphics/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;SFML/Graphics/Glsl.hpp&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;SFML/Window/GlResource.hpp&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;<span class="preprocessor">#include &lt;SFML/System/NonCopyable.hpp&gt;</span></div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector2.hpp&gt;</span></div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="preprocessor">#include &lt;SFML/System/Vector3.hpp&gt;</span></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;<span class="preprocessor">#include &lt;map&gt;</span></div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;{</div><div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;<span class="keyword">class </span>Color;</div><div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;<span class="keyword">class </span>InputStream;</div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;<span class="keyword">class </span>Texture;</div><div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;<span class="keyword">class </span>Transform;</div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno"><a class="line" href="classsf_1_1Shader.php">   52</a></span>&#160;<span class="keyword">class </span>SFML_GRAPHICS_API <a class="code" href="classsf_1_1Shader.php">Shader</a> : <a class="code" href="classsf_1_1GlResource.php">GlResource</a>, <a class="code" href="classsf_1_1NonCopyable.php">NonCopyable</a></div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;{</div><div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno"><a class="line" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3">   60</a></span>&#160;    <span class="keyword">enum</span> <a class="code" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3">Type</a></div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;    {</div><div class="line"><a name="l00062"></a><span class="lineno"><a class="line" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3a8718008f827eb32e29bbdd1791c62dce">   62</a></span>&#160;        <a class="code" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3a8718008f827eb32e29bbdd1791c62dce">Vertex</a>,   </div><div class="line"><a name="l00063"></a><span class="lineno"><a class="line" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3a812421100fd57456727375938fb62788">   63</a></span>&#160;        <a class="code" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3a812421100fd57456727375938fb62788">Geometry</a>, </div><div class="line"><a name="l00064"></a><span class="lineno"><a class="line" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3ace6e88eec3a56b2e55ee3c8e64e9b89a">   64</a></span>&#160;        Fragment  </div><div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;    };</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;</div><div class="line"><a name="l00074"></a><span class="lineno"><a class="line" href="structsf_1_1Shader_1_1CurrentTextureType.php">   74</a></span>&#160;    <span class="keyword">struct </span><a class="code" href="structsf_1_1Shader_1_1CurrentTextureType.php">CurrentTextureType</a> {};</div><div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;</div><div class="line"><a name="l00082"></a><span class="lineno"><a class="line" href="classsf_1_1Shader.php#ac84c7953eec2e19358ea6e2cc5385b8d">   82</a></span>&#160;    <span class="keyword">static</span> <a class="code" href="structsf_1_1Shader_1_1CurrentTextureType.php">CurrentTextureType</a> <a class="code" href="classsf_1_1Shader.php#ac84c7953eec2e19358ea6e2cc5385b8d">CurrentTexture</a>;</div><div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;</div><div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;</div><div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;    <a class="code" href="classsf_1_1Shader.php">Shader</a>();</div><div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;</div><div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;    ~<a class="code" href="classsf_1_1Shader.php">Shader</a>();</div><div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;</div><div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;    <span class="keywordtype">bool</span> loadFromFile(<span class="keyword">const</span> std::string&amp; filename, <a class="code" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3">Type</a> type);</div><div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;</div><div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;    <span class="keywordtype">bool</span> loadFromFile(<span class="keyword">const</span> std::string&amp; vertexShaderFilename, <span class="keyword">const</span> std::string&amp; fragmentShaderFilename);</div><div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;</div><div class="line"><a name="l00162"></a><span class="lineno">  162</span>&#160;    <span class="keywordtype">bool</span> loadFromFile(<span class="keyword">const</span> std::string&amp; vertexShaderFilename, <span class="keyword">const</span> std::string&amp; geometryShaderFilename, <span class="keyword">const</span> std::string&amp; fragmentShaderFilename);</div><div class="line"><a name="l00163"></a><span class="lineno">  163</span>&#160;</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;    <span class="keywordtype">bool</span> loadFromMemory(<span class="keyword">const</span> std::string&amp; shader, <a class="code" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3">Type</a> type);</div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <span class="keywordtype">bool</span> loadFromMemory(<span class="keyword">const</span> std::string&amp; vertexShader, <span class="keyword">const</span> std::string&amp; fragmentShader);</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;</div><div class="line"><a name="l00225"></a><span class="lineno">  225</span>&#160;    <span class="keywordtype">bool</span> loadFromMemory(<span class="keyword">const</span> std::string&amp; vertexShader, <span class="keyword">const</span> std::string&amp; geometryShader, <span class="keyword">const</span> std::string&amp; fragmentShader);</div><div class="line"><a name="l00226"></a><span class="lineno">  226</span>&#160;</div><div class="line"><a name="l00245"></a><span class="lineno">  245</span>&#160;    <span class="keywordtype">bool</span> loadFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; stream, <a class="code" href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3">Type</a> type);</div><div class="line"><a name="l00246"></a><span class="lineno">  246</span>&#160;</div><div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;    <span class="keywordtype">bool</span> loadFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; vertexShaderStream, <a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; fragmentShaderStream);</div><div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;</div><div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;    <span class="keywordtype">bool</span> loadFromStream(<a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; vertexShaderStream, <a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; geometryShaderStream, <a class="code" href="classsf_1_1InputStream.php">InputStream</a>&amp; fragmentShaderStream);</div><div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;</div><div class="line"><a name="l00297"></a><span class="lineno">  297</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">float</span> x);</div><div class="line"><a name="l00298"></a><span class="lineno">  298</span>&#160;</div><div class="line"><a name="l00306"></a><span class="lineno">  306</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Glsl::Vec2</a>&amp; vector);</div><div class="line"><a name="l00307"></a><span class="lineno">  307</span>&#160;</div><div class="line"><a name="l00315"></a><span class="lineno">  315</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Glsl::Vec3</a>&amp; vector);</div><div class="line"><a name="l00316"></a><span class="lineno">  316</span>&#160;</div><div class="line"><a name="l00333"></a><span class="lineno">  333</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Vec4&amp; vector);</div><div class="line"><a name="l00334"></a><span class="lineno">  334</span>&#160;</div><div class="line"><a name="l00342"></a><span class="lineno">  342</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">int</span> x);</div><div class="line"><a name="l00343"></a><span class="lineno">  343</span>&#160;</div><div class="line"><a name="l00351"></a><span class="lineno">  351</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Glsl::Ivec2</a>&amp; vector);</div><div class="line"><a name="l00352"></a><span class="lineno">  352</span>&#160;</div><div class="line"><a name="l00360"></a><span class="lineno">  360</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Glsl::Ivec3</a>&amp; vector);</div><div class="line"><a name="l00361"></a><span class="lineno">  361</span>&#160;</div><div class="line"><a name="l00377"></a><span class="lineno">  377</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Ivec4&amp; vector);</div><div class="line"><a name="l00378"></a><span class="lineno">  378</span>&#160;</div><div class="line"><a name="l00386"></a><span class="lineno">  386</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">bool</span> x);</div><div class="line"><a name="l00387"></a><span class="lineno">  387</span>&#160;</div><div class="line"><a name="l00395"></a><span class="lineno">  395</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Glsl::Bvec2</a>&amp; vector);</div><div class="line"><a name="l00396"></a><span class="lineno">  396</span>&#160;</div><div class="line"><a name="l00404"></a><span class="lineno">  404</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Glsl::Bvec3</a>&amp; vector);</div><div class="line"><a name="l00405"></a><span class="lineno">  405</span>&#160;</div><div class="line"><a name="l00413"></a><span class="lineno">  413</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Bvec4&amp; vector);</div><div class="line"><a name="l00414"></a><span class="lineno">  414</span>&#160;</div><div class="line"><a name="l00422"></a><span class="lineno">  422</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Mat3&amp; matrix);</div><div class="line"><a name="l00423"></a><span class="lineno">  423</span>&#160;</div><div class="line"><a name="l00431"></a><span class="lineno">  431</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Mat4&amp; matrix);</div><div class="line"><a name="l00432"></a><span class="lineno">  432</span>&#160;</div><div class="line"><a name="l00463"></a><span class="lineno">  463</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture);</div><div class="line"><a name="l00464"></a><span class="lineno">  464</span>&#160;</div><div class="line"><a name="l00486"></a><span class="lineno">  486</span>&#160;    <span class="keywordtype">void</span> setUniform(<span class="keyword">const</span> std::string&amp; name, <a class="code" href="structsf_1_1Shader_1_1CurrentTextureType.php">CurrentTextureType</a>);</div><div class="line"><a name="l00487"></a><span class="lineno">  487</span>&#160;</div><div class="line"><a name="l00496"></a><span class="lineno">  496</span>&#160;    <span class="keywordtype">void</span> setUniformArray(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <span class="keywordtype">float</span>* scalarArray, std::size_t length);</div><div class="line"><a name="l00497"></a><span class="lineno">  497</span>&#160;</div><div class="line"><a name="l00506"></a><span class="lineno">  506</span>&#160;    <span class="keywordtype">void</span> setUniformArray(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Glsl::Vec2</a>* vectorArray, std::size_t length);</div><div class="line"><a name="l00507"></a><span class="lineno">  507</span>&#160;</div><div class="line"><a name="l00516"></a><span class="lineno">  516</span>&#160;    <span class="keywordtype">void</span> setUniformArray(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Glsl::Vec3</a>* vectorArray, std::size_t length);</div><div class="line"><a name="l00517"></a><span class="lineno">  517</span>&#160;</div><div class="line"><a name="l00526"></a><span class="lineno">  526</span>&#160;    <span class="keywordtype">void</span> setUniformArray(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Vec4* vectorArray, std::size_t length);</div><div class="line"><a name="l00527"></a><span class="lineno">  527</span>&#160;</div><div class="line"><a name="l00536"></a><span class="lineno">  536</span>&#160;    <span class="keywordtype">void</span> setUniformArray(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Mat3* matrixArray, std::size_t length);</div><div class="line"><a name="l00537"></a><span class="lineno">  537</span>&#160;</div><div class="line"><a name="l00546"></a><span class="lineno">  546</span>&#160;    <span class="keywordtype">void</span> setUniformArray(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> Glsl::Mat4* matrixArray, std::size_t length);</div><div class="line"><a name="l00547"></a><span class="lineno">  547</span>&#160;</div><div class="line"><a name="l00554"></a><span class="lineno">  554</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">float</span> x);</div><div class="line"><a name="l00555"></a><span class="lineno">  555</span>&#160;</div><div class="line"><a name="l00562"></a><span class="lineno">  562</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">float</span> x, <span class="keywordtype">float</span> y);</div><div class="line"><a name="l00563"></a><span class="lineno">  563</span>&#160;</div><div class="line"><a name="l00570"></a><span class="lineno">  570</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">float</span> x, <span class="keywordtype">float</span> y, <span class="keywordtype">float</span> z);</div><div class="line"><a name="l00571"></a><span class="lineno">  571</span>&#160;</div><div class="line"><a name="l00578"></a><span class="lineno">  578</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keywordtype">float</span> x, <span class="keywordtype">float</span> y, <span class="keywordtype">float</span> z, <span class="keywordtype">float</span> w);</div><div class="line"><a name="l00579"></a><span class="lineno">  579</span>&#160;</div><div class="line"><a name="l00586"></a><span class="lineno">  586</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector2.php">Vector2f</a>&amp; vector);</div><div class="line"><a name="l00587"></a><span class="lineno">  587</span>&#160;</div><div class="line"><a name="l00594"></a><span class="lineno">  594</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Vector3.php">Vector3f</a>&amp; vector);</div><div class="line"><a name="l00595"></a><span class="lineno">  595</span>&#160;</div><div class="line"><a name="l00602"></a><span class="lineno">  602</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Color.php">Color</a>&amp; color);</div><div class="line"><a name="l00603"></a><span class="lineno">  603</span>&#160;</div><div class="line"><a name="l00610"></a><span class="lineno">  610</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Transform.php">Transform</a>&amp; transform);</div><div class="line"><a name="l00611"></a><span class="lineno">  611</span>&#160;</div><div class="line"><a name="l00618"></a><span class="lineno">  618</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <span class="keyword">const</span> <a class="code" href="classsf_1_1Texture.php">Texture</a>&amp; texture);</div><div class="line"><a name="l00619"></a><span class="lineno">  619</span>&#160;</div><div class="line"><a name="l00626"></a><span class="lineno">  626</span>&#160;    SFML_DEPRECATED <span class="keywordtype">void</span> setParameter(<span class="keyword">const</span> std::string&amp; name, <a class="code" href="structsf_1_1Shader_1_1CurrentTextureType.php">CurrentTextureType</a>);</div><div class="line"><a name="l00627"></a><span class="lineno">  627</span>&#160;</div><div class="line"><a name="l00638"></a><span class="lineno">  638</span>&#160;    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> getNativeHandle() <span class="keyword">const</span>;</div><div class="line"><a name="l00639"></a><span class="lineno">  639</span>&#160;</div><div class="line"><a name="l00661"></a><span class="lineno">  661</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">void</span> bind(<span class="keyword">const</span> <a class="code" href="classsf_1_1Shader.php">Shader</a>* shader);</div><div class="line"><a name="l00662"></a><span class="lineno">  662</span>&#160;</div><div class="line"><a name="l00673"></a><span class="lineno">  673</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isAvailable();</div><div class="line"><a name="l00674"></a><span class="lineno">  674</span>&#160;</div><div class="line"><a name="l00692"></a><span class="lineno">  692</span>&#160;    <span class="keyword">static</span> <span class="keywordtype">bool</span> isGeometryAvailable();</div><div class="line"><a name="l00693"></a><span class="lineno">  693</span>&#160;</div><div class="line"><a name="l00694"></a><span class="lineno">  694</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00695"></a><span class="lineno">  695</span>&#160;</div><div class="line"><a name="l00709"></a><span class="lineno">  709</span>&#160;    <span class="keywordtype">bool</span> compile(<span class="keyword">const</span> <span class="keywordtype">char</span>* vertexShaderCode, <span class="keyword">const</span> <span class="keywordtype">char</span>* geometryShaderCode, <span class="keyword">const</span> <span class="keywordtype">char</span>* fragmentShaderCode);</div><div class="line"><a name="l00710"></a><span class="lineno">  710</span>&#160;</div><div class="line"><a name="l00718"></a><span class="lineno">  718</span>&#160;    <span class="keywordtype">void</span> bindTextures() <span class="keyword">const</span>;</div><div class="line"><a name="l00719"></a><span class="lineno">  719</span>&#160;</div><div class="line"><a name="l00728"></a><span class="lineno">  728</span>&#160;    <span class="keywordtype">int</span> getUniformLocation(<span class="keyword">const</span> std::string&amp; name);</div><div class="line"><a name="l00729"></a><span class="lineno">  729</span>&#160;</div><div class="line"><a name="l00737"></a><span class="lineno">  737</span>&#160;    <span class="keyword">struct </span>UniformBinder;</div><div class="line"><a name="l00738"></a><span class="lineno">  738</span>&#160;</div><div class="line"><a name="l00740"></a><span class="lineno">  740</span>&#160;    <span class="comment">// Types</span></div><div class="line"><a name="l00742"></a><span class="lineno">  742</span>&#160;<span class="comment"></span>    <span class="keyword">typedef</span> std::map&lt;int, const Texture*&gt; TextureTable;</div><div class="line"><a name="l00743"></a><span class="lineno">  743</span>&#160;    <span class="keyword">typedef</span> std::map&lt;std::string, int&gt; UniformTable;</div><div class="line"><a name="l00744"></a><span class="lineno">  744</span>&#160;</div><div class="line"><a name="l00746"></a><span class="lineno">  746</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00748"></a><span class="lineno">  748</span>&#160;<span class="comment"></span>    <span class="keywordtype">unsigned</span> <span class="keywordtype">int</span> m_shaderProgram;  </div><div class="line"><a name="l00749"></a><span class="lineno">  749</span>&#160;    <span class="keywordtype">int</span>          m_currentTexture; </div><div class="line"><a name="l00750"></a><span class="lineno">  750</span>&#160;    TextureTable m_textures;       </div><div class="line"><a name="l00751"></a><span class="lineno">  751</span>&#160;    UniformTable m_uniforms;       </div><div class="line"><a name="l00752"></a><span class="lineno">  752</span>&#160;};</div><div class="line"><a name="l00753"></a><span class="lineno">  753</span>&#160;</div><div class="line"><a name="l00754"></a><span class="lineno">  754</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00755"></a><span class="lineno">  755</span>&#160;</div><div class="line"><a name="l00756"></a><span class="lineno">  756</span>&#160;</div><div class="line"><a name="l00757"></a><span class="lineno">  757</span>&#160;<span class="preprocessor">#endif // SFML_SHADER_HPP</span></div><div class="line"><a name="l00758"></a><span class="lineno">  758</span>&#160;</div><div class="line"><a name="l00759"></a><span class="lineno">  759</span>&#160;</div><div class="ttc" id="structsf_1_1Shader_1_1CurrentTextureType_php"><div class="ttname"><a href="structsf_1_1Shader_1_1CurrentTextureType.php">sf::Shader::CurrentTextureType</a></div><div class="ttdoc">Special type that can be passed to setUniform(), and that represents the texture of the object being ...</div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00074">Shader.hpp:74</a></div></div>
<div class="ttc" id="classsf_1_1Color_php"><div class="ttname"><a href="classsf_1_1Color.php">sf::Color</a></div><div class="ttdoc">Utility class for manipulating RGBA colors. </div><div class="ttdef"><b>Definition:</b> <a href="Color_8hpp_source.php#l00040">Color.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1InputStream_php"><div class="ttname"><a href="classsf_1_1InputStream.php">sf::InputStream</a></div><div class="ttdoc">Abstract class for custom file input streams. </div><div class="ttdef"><b>Definition:</b> <a href="InputStream_8hpp_source.php#l00041">InputStream.hpp:41</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1GlResource_php"><div class="ttname"><a href="classsf_1_1GlResource.php">sf::GlResource</a></div><div class="ttdoc">Base class for classes that require an OpenGL context. </div><div class="ttdef"><b>Definition:</b> <a href="GlResource_8hpp_source.php#l00040">GlResource.hpp:40</a></div></div>
<div class="ttc" id="classsf_1_1Shader_php_afaa1aa65e5de37b74d047da9def9f9b3"><div class="ttname"><a href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3">sf::Shader::Type</a></div><div class="ttdeci">Type</div><div class="ttdoc">Types of shaders. </div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00060">Shader.hpp:60</a></div></div>
<div class="ttc" id="classsf_1_1Shader_php_ac84c7953eec2e19358ea6e2cc5385b8d"><div class="ttname"><a href="classsf_1_1Shader.php#ac84c7953eec2e19358ea6e2cc5385b8d">sf::Shader::CurrentTexture</a></div><div class="ttdeci">static CurrentTextureType CurrentTexture</div><div class="ttdoc">Represents the texture of the object being drawn. </div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00082">Shader.hpp:82</a></div></div>
<div class="ttc" id="classsf_1_1Shader_php_afaa1aa65e5de37b74d047da9def9f9b3a812421100fd57456727375938fb62788"><div class="ttname"><a href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3a812421100fd57456727375938fb62788">sf::Shader::Geometry</a></div><div class="ttdoc">Geometry shader. </div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00063">Shader.hpp:63</a></div></div>
<div class="ttc" id="classsf_1_1Transform_php"><div class="ttname"><a href="classsf_1_1Transform.php">sf::Transform</a></div><div class="ttdoc">Define a 3x3 transform matrix. </div><div class="ttdef"><b>Definition:</b> <a href="Transform_8hpp_source.php#l00042">Transform.hpp:42</a></div></div>
<div class="ttc" id="classsf_1_1Texture_php"><div class="ttname"><a href="classsf_1_1Texture.php">sf::Texture</a></div><div class="ttdoc">Image living on the graphics card that can be used for drawing. </div><div class="ttdef"><b>Definition:</b> <a href="Texture_8hpp_source.php#l00047">Texture.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1Shader_php"><div class="ttname"><a href="classsf_1_1Shader.php">sf::Shader</a></div><div class="ttdoc">Shader class (vertex, geometry and fragment) </div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00052">Shader.hpp:52</a></div></div>
<div class="ttc" id="classsf_1_1Vector3_php"><div class="ttname"><a href="classsf_1_1Vector3.php">sf::Vector3</a></div><div class="ttdoc">Utility template class for manipulating 3-dimensional vectors. </div><div class="ttdef"><b>Definition:</b> <a href="Vector3_8hpp_source.php#l00037">Vector3.hpp:37</a></div></div>
<div class="ttc" id="classsf_1_1NonCopyable_php"><div class="ttname"><a href="classsf_1_1NonCopyable.php">sf::NonCopyable</a></div><div class="ttdoc">Utility class that makes any derived class non-copyable. </div><div class="ttdef"><b>Definition:</b> <a href="NonCopyable_8hpp_source.php#l00041">NonCopyable.hpp:41</a></div></div>
<div class="ttc" id="classsf_1_1Shader_php_afaa1aa65e5de37b74d047da9def9f9b3a8718008f827eb32e29bbdd1791c62dce"><div class="ttname"><a href="classsf_1_1Shader.php#afaa1aa65e5de37b74d047da9def9f9b3a8718008f827eb32e29bbdd1791c62dce">sf::Shader::Vertex</a></div><div class="ttdoc">Vertex shader </div><div class="ttdef"><b>Definition:</b> <a href="Shader_8hpp_source.php#l00062">Shader.hpp:62</a></div></div>
<div class="ttc" id="classsf_1_1Vector2_php"><div class="ttname"><a href="classsf_1_1Vector2.php">sf::Vector2&lt; float &gt;</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer.php");
?>
