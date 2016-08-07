<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'Packet.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_5c1116cdc74b8c7983261a15f16adc17.php">Network</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Packet.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_PACKET_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_PACKET_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="comment">// Headers</span></div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="comment"></span><span class="preprocessor">#include &lt;SFML/Network/Export.hpp&gt;</span></div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;<span class="preprocessor">#include &lt;string&gt;</span></div><div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div><div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;</div><div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;</div><div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;{</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;<span class="keyword">class </span>String;</div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;<span class="keyword">class </span>TcpSocket;</div><div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;<span class="keyword">class </span>UdpSocket;</div><div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;</div><div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="classsf_1_1Packet.php">   47</a></span>&#160;<span class="keyword">class </span>SFML_NETWORK_API <a class="code" href="classsf_1_1Packet.php">Packet</a></div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;{</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;    <span class="comment">// A bool-like type that cannot be converted to integer or pointer types</span></div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;    <span class="keyword">typedef</span> bool (<a class="code" href="classsf_1_1Packet.php">Packet</a>::*BoolType)(std::size_t);</div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;</div><div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>();</div><div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;</div><div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;    <span class="keyword">virtual</span> ~<a class="code" href="classsf_1_1Packet.php">Packet</a>();</div><div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;</div><div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;    <span class="keywordtype">void</span> append(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t sizeInBytes);</div><div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;</div><div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;    <span class="keywordtype">void</span> clear();</div><div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;</div><div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;    <span class="keyword">const</span> <span class="keywordtype">void</span>* getData() <span class="keyword">const</span>;</div><div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;</div><div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;    std::size_t getDataSize() <span class="keyword">const</span>;</div><div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;</div><div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;    <span class="keywordtype">bool</span> endOfPacket() <span class="keyword">const</span>;</div><div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;</div><div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;<span class="keyword">public</span>:</div><div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;</div><div class="line"><a name="l00171"></a><span class="lineno">  171</span>&#160;    <span class="keyword">operator</span> BoolType() <span class="keyword">const</span>;</div><div class="line"><a name="l00172"></a><span class="lineno">  172</span>&#160;</div><div class="line"><a name="l00177"></a><span class="lineno">  177</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(<span class="keywordtype">bool</span>&amp;         data);</div><div class="line"><a name="l00178"></a><span class="lineno">  178</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Int8&amp;         data);</div><div class="line"><a name="l00179"></a><span class="lineno">  179</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Uint8&amp;        data);</div><div class="line"><a name="l00180"></a><span class="lineno">  180</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Int16&amp;        data);</div><div class="line"><a name="l00181"></a><span class="lineno">  181</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Uint16&amp;       data);</div><div class="line"><a name="l00182"></a><span class="lineno">  182</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Int32&amp;        data);</div><div class="line"><a name="l00183"></a><span class="lineno">  183</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Uint32&amp;       data);</div><div class="line"><a name="l00184"></a><span class="lineno">  184</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Int64&amp;        data);</div><div class="line"><a name="l00185"></a><span class="lineno">  185</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(Uint64&amp;       data);</div><div class="line"><a name="l00186"></a><span class="lineno">  186</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(<span class="keywordtype">float</span>&amp;        data);</div><div class="line"><a name="l00187"></a><span class="lineno">  187</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(<span class="keywordtype">double</span>&amp;       data);</div><div class="line"><a name="l00188"></a><span class="lineno">  188</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(<span class="keywordtype">char</span>*         data);</div><div class="line"><a name="l00189"></a><span class="lineno">  189</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(std::string&amp;  data);</div><div class="line"><a name="l00190"></a><span class="lineno">  190</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(<span class="keywordtype">wchar_t</span>*      data);</div><div class="line"><a name="l00191"></a><span class="lineno">  191</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(std::wstring&amp; data);</div><div class="line"><a name="l00192"></a><span class="lineno">  192</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &gt;&gt;(<a class="code" href="classsf_1_1String.php">String</a>&amp;       data);</div><div class="line"><a name="l00193"></a><span class="lineno">  193</span>&#160;</div><div class="line"><a name="l00198"></a><span class="lineno">  198</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keywordtype">bool</span>                data);</div><div class="line"><a name="l00199"></a><span class="lineno">  199</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Int8                data);</div><div class="line"><a name="l00200"></a><span class="lineno">  200</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Uint8               data);</div><div class="line"><a name="l00201"></a><span class="lineno">  201</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Int16               data);</div><div class="line"><a name="l00202"></a><span class="lineno">  202</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Uint16              data);</div><div class="line"><a name="l00203"></a><span class="lineno">  203</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Int32               data);</div><div class="line"><a name="l00204"></a><span class="lineno">  204</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Uint32              data);</div><div class="line"><a name="l00205"></a><span class="lineno">  205</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Int64               data);</div><div class="line"><a name="l00206"></a><span class="lineno">  206</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(Uint64              data);</div><div class="line"><a name="l00207"></a><span class="lineno">  207</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keywordtype">float</span>               data);</div><div class="line"><a name="l00208"></a><span class="lineno">  208</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keywordtype">double</span>              data);</div><div class="line"><a name="l00209"></a><span class="lineno">  209</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keyword">const</span> <span class="keywordtype">char</span>*         data);</div><div class="line"><a name="l00210"></a><span class="lineno">  210</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keyword">const</span> std::string&amp;  data);</div><div class="line"><a name="l00211"></a><span class="lineno">  211</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keyword">const</span> <span class="keywordtype">wchar_t</span>*      data);</div><div class="line"><a name="l00212"></a><span class="lineno">  212</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keyword">const</span> std::wstring&amp; data);</div><div class="line"><a name="l00213"></a><span class="lineno">  213</span>&#160;    <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; operator &lt;&lt;(<span class="keyword">const</span> <a class="code" href="classsf_1_1String.php">String</a>&amp;       data);</div><div class="line"><a name="l00214"></a><span class="lineno">  214</span>&#160;</div><div class="line"><a name="l00215"></a><span class="lineno">  215</span>&#160;<span class="keyword">protected</span>:</div><div class="line"><a name="l00216"></a><span class="lineno">  216</span>&#160;</div><div class="line"><a name="l00217"></a><span class="lineno">  217</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1TcpSocket.php">TcpSocket</a>;</div><div class="line"><a name="l00218"></a><span class="lineno">  218</span>&#160;    <span class="keyword">friend</span> <span class="keyword">class </span><a class="code" href="classsf_1_1UdpSocket.php">UdpSocket</a>;</div><div class="line"><a name="l00219"></a><span class="lineno">  219</span>&#160;</div><div class="line"><a name="l00238"></a><span class="lineno">  238</span>&#160;    <span class="keyword">virtual</span> <span class="keyword">const</span> <span class="keywordtype">void</span>* onSend(std::size_t&amp; size);</div><div class="line"><a name="l00239"></a><span class="lineno">  239</span>&#160;</div><div class="line"><a name="l00257"></a><span class="lineno">  257</span>&#160;    <span class="keyword">virtual</span> <span class="keywordtype">void</span> onReceive(<span class="keyword">const</span> <span class="keywordtype">void</span>* data, std::size_t size);</div><div class="line"><a name="l00258"></a><span class="lineno">  258</span>&#160;</div><div class="line"><a name="l00259"></a><span class="lineno">  259</span>&#160;<span class="keyword">private</span>:</div><div class="line"><a name="l00260"></a><span class="lineno">  260</span>&#160;</div><div class="line"><a name="l00265"></a><span class="lineno">  265</span>&#160;    <span class="keywordtype">bool</span> operator ==(<span class="keyword">const</span> <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; right) <span class="keyword">const</span>;</div><div class="line"><a name="l00266"></a><span class="lineno">  266</span>&#160;    <span class="keywordtype">bool</span> operator !=(<span class="keyword">const</span> <a class="code" href="classsf_1_1Packet.php">Packet</a>&amp; right) <span class="keyword">const</span>;</div><div class="line"><a name="l00267"></a><span class="lineno">  267</span>&#160;</div><div class="line"><a name="l00278"></a><span class="lineno">  278</span>&#160;    <span class="keywordtype">bool</span> checkSize(std::size_t size);</div><div class="line"><a name="l00279"></a><span class="lineno">  279</span>&#160;</div><div class="line"><a name="l00281"></a><span class="lineno">  281</span>&#160;    <span class="comment">// Member data</span></div><div class="line"><a name="l00283"></a><span class="lineno">  283</span>&#160;<span class="comment"></span>    std::vector&lt;char&gt; m_data;    </div><div class="line"><a name="l00284"></a><span class="lineno">  284</span>&#160;    std::size_t       m_readPos; </div><div class="line"><a name="l00285"></a><span class="lineno">  285</span>&#160;    std::size_t       m_sendPos; </div><div class="line"><a name="l00286"></a><span class="lineno">  286</span>&#160;    <span class="keywordtype">bool</span>              m_isValid; </div><div class="line"><a name="l00287"></a><span class="lineno">  287</span>&#160;};</div><div class="line"><a name="l00288"></a><span class="lineno">  288</span>&#160;</div><div class="line"><a name="l00289"></a><span class="lineno">  289</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00290"></a><span class="lineno">  290</span>&#160;</div><div class="line"><a name="l00291"></a><span class="lineno">  291</span>&#160;</div><div class="line"><a name="l00292"></a><span class="lineno">  292</span>&#160;<span class="preprocessor">#endif // SFML_PACKET_HPP</span></div><div class="line"><a name="l00293"></a><span class="lineno">  293</span>&#160;</div><div class="line"><a name="l00294"></a><span class="lineno">  294</span>&#160;</div><div class="ttc" id="classsf_1_1String_php"><div class="ttname"><a href="classsf_1_1String.php">sf::String</a></div><div class="ttdoc">Utility string class that automatically handles conversions between types and encodings. </div><div class="ttdef"><b>Definition:</b> <a href="String_8hpp_source.php#l00045">String.hpp:45</a></div></div>
<div class="ttc" id="classsf_1_1TcpSocket_php"><div class="ttname"><a href="classsf_1_1TcpSocket.php">sf::TcpSocket</a></div><div class="ttdoc">Specialized socket using the TCP protocol. </div><div class="ttdef"><b>Definition:</b> <a href="TcpSocket_8hpp_source.php#l00046">TcpSocket.hpp:46</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="classsf_1_1Packet_php"><div class="ttname"><a href="classsf_1_1Packet.php">sf::Packet</a></div><div class="ttdoc">Utility class to build blocks of data to transfer over the network. </div><div class="ttdef"><b>Definition:</b> <a href="Packet_8hpp_source.php#l00047">Packet.hpp:47</a></div></div>
<div class="ttc" id="classsf_1_1UdpSocket_php"><div class="ttname"><a href="classsf_1_1UdpSocket.php">sf::UdpSocket</a></div><div class="ttdoc">Specialized socket using the UDP protocol. </div><div class="ttdef"><b>Definition:</b> <a href="UdpSocket_8hpp_source.php#l00045">UdpSocket.hpp:45</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
