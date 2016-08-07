<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::Event::MouseWheelEvent Struct Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.11 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1Event.php">Event</a></li><li class="navelem"><a class="el" href="structsf_1_1Event_1_1MouseWheelEvent.php">MouseWheelEvent</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Public Attributes</a> &#124;
<a href="structsf_1_1Event_1_1MouseWheelEvent-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::Event::MouseWheelEvent Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1Mouse.php" title="Give access to the real-time state of the mouse. ">Mouse</a> wheel events parameters (MouseWheelMoved)  
 <a href="structsf_1_1Event_1_1MouseWheelEvent.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Event_8hpp_source.php">Event.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Public Attributes</h2></td></tr>
<tr class="memitem:a4d02b524b5530c7863e7b0f211fa522c"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelEvent.php#a4d02b524b5530c7863e7b0f211fa522c">delta</a></td></tr>
<tr class="memdesc:a4d02b524b5530c7863e7b0f211fa522c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Number of ticks the wheel has moved (positive is up, negative is down)  <a href="#a4d02b524b5530c7863e7b0f211fa522c">More...</a><br /></td></tr>
<tr class="separator:a4d02b524b5530c7863e7b0f211fa522c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3079803f836ed7208f43b60332ab053e"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelEvent.php#a3079803f836ed7208f43b60332ab053e">x</a></td></tr>
<tr class="memdesc:a3079803f836ed7208f43b60332ab053e"><td class="mdescLeft">&#160;</td><td class="mdescRight">X position of the mouse pointer, relative to the left of the owner window.  <a href="#a3079803f836ed7208f43b60332ab053e">More...</a><br /></td></tr>
<tr class="separator:a3079803f836ed7208f43b60332ab053e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7ea1b8d8c28e2f530c6e9e6d9a5d32d3"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="structsf_1_1Event_1_1MouseWheelEvent.php#a7ea1b8d8c28e2f530c6e9e6d9a5d32d3">y</a></td></tr>
<tr class="memdesc:a7ea1b8d8c28e2f530c6e9e6d9a5d32d3"><td class="mdescLeft">&#160;</td><td class="mdescRight">Y position of the mouse pointer, relative to the top of the owner window.  <a href="#a7ea1b8d8c28e2f530c6e9e6d9a5d32d3">More...</a><br /></td></tr>
<tr class="separator:a7ea1b8d8c28e2f530c6e9e6d9a5d32d3"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1Mouse.php" title="Give access to the real-time state of the mouse. ">Mouse</a> wheel events parameters (MouseWheelMoved) </p>
<dl class="deprecated"><dt><b><a class="el" href="deprecated.php#_deprecated000017">Deprecated:</a></b></dt><dd>This event is deprecated and potentially inaccurate. Use <a class="el" href="structsf_1_1Event_1_1MouseWheelScrollEvent.php" title="Mouse wheel events parameters (MouseWheelScrolled) ">MouseWheelScrollEvent</a> instead.</dd></dl>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00109">109</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>
</div><h2 class="groupheader">Member Data Documentation</h2>
<a class="anchor" id="a4d02b524b5530c7863e7b0f211fa522c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int sf::Event::MouseWheelEvent::delta</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Number of ticks the wheel has moved (positive is up, negative is down) </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00111">111</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a3079803f836ed7208f43b60332ab053e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int sf::Event::MouseWheelEvent::x</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>X position of the mouse pointer, relative to the left of the owner window. </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00112">112</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<a class="anchor" id="a7ea1b8d8c28e2f530c6e9e6d9a5d32d3"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int sf::Event::MouseWheelEvent::y</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Y position of the mouse pointer, relative to the top of the owner window. </p>

<p>Definition at line <a class="el" href="Event_8hpp_source.php#l00113">113</a> of file <a class="el" href="Event_8hpp_source.php">Event.hpp</a>.</p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="Event_8hpp_source.php">Event.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>
