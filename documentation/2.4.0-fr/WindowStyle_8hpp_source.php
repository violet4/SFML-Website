<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'WindowStyle.hpp Source File'; // the $ title variable is automatically replaced by doxygen with the page title
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
<li class="navelem"><a class="el" href="dir_c9d62fd513ce19bab3d7ef8db833e3f1.php">SFML</a></li><li class="navelem"><a class="el" href="dir_66c4f0b3361ff6a900e01a4b3c9d5eb7.php">include</a></li><li class="navelem"><a class="el" href="dir_b640c2c295eeac6b731646a7ed21830e.php">SFML</a></li><li class="navelem"><a class="el" href="dir_9aeeb18f6197238fd33123535246e540.php">Window</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">WindowStyle.hpp</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// SFML - Simple and Fast Multimedia Library</span></div><div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// Copyright (C) 2007-2016 Laurent Gomila (laurent@sfml-dev.org)</span></div><div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// This software is provided &#39;as-is&#39;, without any express or implied warranty.</span></div><div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">// In no event will the authors be held liable for any damages arising from the use of this software.</span></div><div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// Permission is granted to anyone to use this software for any purpose,</span></div><div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// including commercial applications, and to alter it and redistribute it freely,</span></div><div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// subject to the following restrictions:</span></div><div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// 1. The origin of this software must not be misrepresented;</span></div><div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">//    you must not claim that you wrote the original software.</span></div><div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="comment">//    If you use this software in a product, an acknowledgment</span></div><div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="comment">//    in the product documentation would be appreciated but is not required.</span></div><div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="comment">// 2. Altered source versions must be plainly marked as such,</span></div><div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="comment">//    and must not be misrepresented as being the original software.</span></div><div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="comment">// 3. This notice may not be removed or altered from any source distribution.</span></div><div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="comment">//</span></div><div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="comment"></span></div><div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#ifndef SFML_WINDOWSTYLE_HPP</span></div><div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;<span class="preprocessor">#define SFML_WINDOWSTYLE_HPP</span></div><div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;</div><div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;</div><div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacesf.php">sf</a></div><div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div><div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="keyword">namespace </span>Style</div><div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;{</div><div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    <span class="keyword">enum</span></div><div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    {</div><div class="line"><a name="l00040"></a><span class="lineno"><a class="line" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a8c35a9c8507559e455387fc4a83ce422">   40</a></span>&#160;        <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a8c35a9c8507559e455387fc4a83ce422">None</a>       = 0,      </div><div class="line"><a name="l00041"></a><span class="lineno"><a class="line" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ab4c8b32b05ed715928513787cb1e85b6">   41</a></span>&#160;        <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ab4c8b32b05ed715928513787cb1e85b6">Titlebar</a>   = 1 &lt;&lt; 0, </div><div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8accff967648ebcd5db2007eff7352b50f">   42</a></span>&#160;        <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8accff967648ebcd5db2007eff7352b50f">Resize</a>     = 1 &lt;&lt; 1, </div><div class="line"><a name="l00043"></a><span class="lineno"><a class="line" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ae07a7d411d5acf28f4a9a4b76a3a9493">   43</a></span>&#160;        <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ae07a7d411d5acf28f4a9a4b76a3a9493">Close</a>      = 1 &lt;&lt; 2, </div><div class="line"><a name="l00044"></a><span class="lineno"><a class="line" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a6288ec86830245cf957e2d234f79f50d">   44</a></span>&#160;        <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a6288ec86830245cf957e2d234f79f50d">Fullscreen</a> = 1 &lt;&lt; 3, </div><div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;</div><div class="line"><a name="l00046"></a><span class="lineno"><a class="line" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a5597cd420fc461807e4a201c92adea37">   46</a></span>&#160;        <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a5597cd420fc461807e4a201c92adea37">Default</a> = <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ab4c8b32b05ed715928513787cb1e85b6">Titlebar</a> | <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8accff967648ebcd5db2007eff7352b50f">Resize</a> | <a class="code" href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ae07a7d411d5acf28f4a9a4b76a3a9493">Close</a> </div><div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;    };</div><div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;}</div><div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;</div><div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;} <span class="comment">// namespace sf</span></div><div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;</div><div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;</div><div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;<span class="preprocessor">#endif // SFML_WINDOWSTYLE_HPP</span></div><div class="ttc" id="group__window_php_gga8d7a3b8425c907a2872cb57e32cea5b8a8c35a9c8507559e455387fc4a83ce422"><div class="ttname"><a href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a8c35a9c8507559e455387fc4a83ce422">sf::Style::None</a></div><div class="ttdoc">No border / title bar (this flag and all others are mutually exclusive) </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00040">WindowStyle.hpp:40</a></div></div>
<div class="ttc" id="namespacesf_php"><div class="ttname"><a href="namespacesf.php">sf</a></div><div class="ttdef"><b>Definition:</b> <a href="AlResource_8hpp_source.php#l00034">AlResource.hpp:34</a></div></div>
<div class="ttc" id="group__window_php_gga8d7a3b8425c907a2872cb57e32cea5b8ab4c8b32b05ed715928513787cb1e85b6"><div class="ttname"><a href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ab4c8b32b05ed715928513787cb1e85b6">sf::Style::Titlebar</a></div><div class="ttdoc">Title bar + fixed border. </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00041">WindowStyle.hpp:41</a></div></div>
<div class="ttc" id="group__window_php_gga8d7a3b8425c907a2872cb57e32cea5b8a5597cd420fc461807e4a201c92adea37"><div class="ttname"><a href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a5597cd420fc461807e4a201c92adea37">sf::Style::Default</a></div><div class="ttdoc">Default window style. </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00046">WindowStyle.hpp:46</a></div></div>
<div class="ttc" id="group__window_php_gga8d7a3b8425c907a2872cb57e32cea5b8accff967648ebcd5db2007eff7352b50f"><div class="ttname"><a href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8accff967648ebcd5db2007eff7352b50f">sf::Style::Resize</a></div><div class="ttdoc">Title bar + resizable border + maximize button. </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00042">WindowStyle.hpp:42</a></div></div>
<div class="ttc" id="group__window_php_gga8d7a3b8425c907a2872cb57e32cea5b8a6288ec86830245cf957e2d234f79f50d"><div class="ttname"><a href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8a6288ec86830245cf957e2d234f79f50d">sf::Style::Fullscreen</a></div><div class="ttdoc">Fullscreen mode (this flag and all others are mutually exclusive) </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00044">WindowStyle.hpp:44</a></div></div>
<div class="ttc" id="group__window_php_gga8d7a3b8425c907a2872cb57e32cea5b8ae07a7d411d5acf28f4a9a4b76a3a9493"><div class="ttname"><a href="group__window.php#gga8d7a3b8425c907a2872cb57e32cea5b8ae07a7d411d5acf28f4a9a4b76a3a9493">sf::Style::Close</a></div><div class="ttdoc">Title bar + close button. </div><div class="ttdef"><b>Definition:</b> <a href="WindowStyle_8hpp_source.php#l00043">WindowStyle.hpp:43</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
