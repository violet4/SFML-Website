<?php
    $version = '2.4.0'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::ThreadLocalPtr&lt; T &gt; Class Template Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header-fr.php');
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
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#pri-methods">Private Member Functions</a> &#124;
<a href="classsf_1_1ThreadLocalPtr-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::ThreadLocalPtr&lt; T &gt; Class Template Reference<div class="ingroups"><a class="el" href="group__system.php">System module</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p>Pointer to a thread-local variable.  
 <a href="classsf_1_1ThreadLocalPtr.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="ThreadLocalPtr_8hpp_source.php">ThreadLocalPtr.hpp</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for sf::ThreadLocalPtr&lt; T &gt;:</div>
<div class="dyncontent">
 <div class="center">
  <img src="classsf_1_1ThreadLocalPtr.png" usemap="#sf::ThreadLocalPtr_3C_20T_20_3E_map" alt=""/>
  <map id="sf::ThreadLocalPtr_3C_20T_20_3E_map" name="sf::ThreadLocalPtr&lt; T &gt;_map">
<area href="classsf_1_1ThreadLocal.php" title="Defines variables with thread-local storage. " alt="sf::ThreadLocal" shape="rect" coords="0,0,146,24"/>
</map>
 </div></div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a8c678211d7828d2a8c41cb534422d649"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocalPtr.php#a8c678211d7828d2a8c41cb534422d649">ThreadLocalPtr</a> (T *value=NULL)</td></tr>
<tr class="memdesc:a8c678211d7828d2a8c41cb534422d649"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a8c678211d7828d2a8c41cb534422d649">More...</a><br /></td></tr>
<tr class="separator:a8c678211d7828d2a8c41cb534422d649"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a601856258cf668c345b63217a9cd2c07"><td class="memItemLeft" align="right" valign="top">T &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocalPtr.php#a601856258cf668c345b63217a9cd2c07">operator*</a> () const </td></tr>
<tr class="memdesc:a601856258cf668c345b63217a9cd2c07"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of unary operator *.  <a href="#a601856258cf668c345b63217a9cd2c07">More...</a><br /></td></tr>
<tr class="separator:a601856258cf668c345b63217a9cd2c07"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aecebc50c4c0ed75bcf246707d54c4d4b"><td class="memItemLeft" align="right" valign="top">T *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocalPtr.php#aecebc50c4c0ed75bcf246707d54c4d4b">operator-&gt;</a> () const </td></tr>
<tr class="memdesc:aecebc50c4c0ed75bcf246707d54c4d4b"><td class="mdescLeft">&#160;</td><td class="mdescRight">Overload of operator -&gt;  <a href="#aecebc50c4c0ed75bcf246707d54c4d4b">More...</a><br /></td></tr>
<tr class="separator:aecebc50c4c0ed75bcf246707d54c4d4b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab4a6a341c26b58f0ed3ef86502bd9572"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocalPtr.php#ab4a6a341c26b58f0ed3ef86502bd9572">operator T *</a> () const </td></tr>
<tr class="memdesc:ab4a6a341c26b58f0ed3ef86502bd9572"><td class="mdescLeft">&#160;</td><td class="mdescRight">Conversion operator to implicitly convert the pointer to its raw pointer type (T*)  <a href="#ab4a6a341c26b58f0ed3ef86502bd9572">More...</a><br /></td></tr>
<tr class="separator:ab4a6a341c26b58f0ed3ef86502bd9572"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a2adfc2e37f437e53acd9d1abd377ef2e"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a>&lt; T &gt; &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocalPtr.php#a2adfc2e37f437e53acd9d1abd377ef2e">operator=</a> (T *value)</td></tr>
<tr class="memdesc:a2adfc2e37f437e53acd9d1abd377ef2e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Assignment operator for a raw pointer parameter.  <a href="#a2adfc2e37f437e53acd9d1abd377ef2e">More...</a><br /></td></tr>
<tr class="separator:a2adfc2e37f437e53acd9d1abd377ef2e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a934db0e5bed32b2d8d0cb02786fb91cf"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a>&lt; T &gt; &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocalPtr.php#a934db0e5bed32b2d8d0cb02786fb91cf">operator=</a> (const <a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a>&lt; T &gt; &amp;right)</td></tr>
<tr class="memdesc:a934db0e5bed32b2d8d0cb02786fb91cf"><td class="mdescLeft">&#160;</td><td class="mdescRight">Assignment operator for a <a class="el" href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. ">ThreadLocalPtr</a> parameter.  <a href="#a934db0e5bed32b2d8d0cb02786fb91cf">More...</a><br /></td></tr>
<tr class="separator:a934db0e5bed32b2d8d0cb02786fb91cf"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pri-methods"></a>
Private Member Functions</h2></td></tr>
<tr class="memitem:ab7e334c83d77644a8e67ee31c3230007"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocal.php#ab7e334c83d77644a8e67ee31c3230007">setValue</a> (void *value)</td></tr>
<tr class="memdesc:ab7e334c83d77644a8e67ee31c3230007"><td class="mdescLeft">&#160;</td><td class="mdescRight">Set the thread-specific value of the variable.  <a href="#ab7e334c83d77644a8e67ee31c3230007">More...</a><br /></td></tr>
<tr class="separator:ab7e334c83d77644a8e67ee31c3230007"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aef35a39686eac4b6634a6e5605aacfd7"><td class="memItemLeft" align="right" valign="top">void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1ThreadLocal.php#aef35a39686eac4b6634a6e5605aacfd7">getValue</a> () const </td></tr>
<tr class="memdesc:aef35a39686eac4b6634a6e5605aacfd7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Retrieve the thread-specific value of the variable.  <a href="#aef35a39686eac4b6634a6e5605aacfd7">More...</a><br /></td></tr>
<tr class="separator:aef35a39686eac4b6634a6e5605aacfd7"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><h3>template&lt;typename T&gt;<br />
class sf::ThreadLocalPtr&lt; T &gt;</h3>

<p>Pointer to a thread-local variable. </p>
<p><a class="el" href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. ">sf::ThreadLocalPtr</a> is a type-safe wrapper for storing pointers to thread-local variables.</p>
<p>A thread-local variable holds a different value for each different thread, unlike normal variables that are shared.</p>
<p>Its usage is completely transparent, so that it is similar to manipulating the raw pointer directly (like any smart pointer).</p>
<p>Usage example: </p><div class="fragment"><div class="line">MyClass object1;</div><div class="line">MyClass object2;</div><div class="line"><a class="code" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr&lt;MyClass&gt;</a> objectPtr;</div><div class="line"></div><div class="line"><span class="keywordtype">void</span> thread1()</div><div class="line">{</div><div class="line">    objectPtr = &amp;object1; <span class="comment">// doesn&#39;t impact thread2</span></div><div class="line">    ...</div><div class="line">}</div><div class="line"></div><div class="line"><span class="keywordtype">void</span> thread2()</div><div class="line">{</div><div class="line">    objectPtr = &amp;object2; <span class="comment">// doesn&#39;t impact thread1</span></div><div class="line">    ...</div><div class="line">}</div><div class="line"></div><div class="line"><span class="keywordtype">int</span> main()</div><div class="line">{</div><div class="line">    <span class="comment">// Create and launch the two threads</span></div><div class="line">    <a class="code" href="classsf_1_1Thread.php">sf::Thread</a> t1(&amp;thread1);</div><div class="line">    <a class="code" href="classsf_1_1Thread.php">sf::Thread</a> t2(&amp;thread2);</div><div class="line">    t1.launch();</div><div class="line">    t2.launch();</div><div class="line"></div><div class="line">    <span class="keywordflow">return</span> 0;</div><div class="line">}</div></div><!-- fragment --><p><a class="el" href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. ">ThreadLocalPtr</a> is designed for internal use; however you can use it if you feel like it fits well your implementation. </p>

<p>Definition at line <a class="el" href="ThreadLocalPtr_8hpp_source.php#l00041">41</a> of file <a class="el" href="ThreadLocalPtr_8hpp_source.php">ThreadLocalPtr.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a8c678211d7828d2a8c41cb534422d649"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr</a>&lt; T &gt;::<a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a> </td>
          <td>(</td>
          <td class="paramtype">T *&#160;</td>
          <td class="paramname"><em>value</em> = <code>NULL</code></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">value</td><td>Optional value to initialize the variable </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="ab4a6a341c26b58f0ed3ef86502bd9572"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr</a>&lt; T &gt;::operator T * </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Conversion operator to implicitly convert the pointer to its raw pointer type (T*) </p>
<dl class="section return"><dt>Returns</dt><dd>Pointer to the actual object </dd></dl>

</div>
</div>
<a class="anchor" id="a601856258cf668c345b63217a9cd2c07"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T&amp; <a class="el" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr</a>&lt; T &gt;::operator* </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Overload of unary operator *. </p>
<p>Like raw pointers, applying the * operator returns a reference to the pointed-to object.</p>
<dl class="section return"><dt>Returns</dt><dd>Reference to the thread-local variable </dd></dl>

</div>
</div>
<a class="anchor" id="aecebc50c4c0ed75bcf246707d54c4d4b"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname">T* <a class="el" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr</a>&lt; T &gt;::operator-&gt; </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Overload of operator -&gt; </p>
<p>Similarly to raw pointers, applying the -&gt; operator returns the pointed-to object.</p>
<dl class="section return"><dt>Returns</dt><dd>Pointer to the thread-local variable </dd></dl>

</div>
</div>
<a class="anchor" id="a2adfc2e37f437e53acd9d1abd377ef2e"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a>&lt;T&gt;&amp; <a class="el" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr</a>&lt; T &gt;::operator= </td>
          <td>(</td>
          <td class="paramtype">T *&#160;</td>
          <td class="paramname"><em>value</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Assignment operator for a raw pointer parameter. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">value</td><td>Pointer to assign</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Reference to self </dd></dl>

</div>
</div>
<a class="anchor" id="a934db0e5bed32b2d8d0cb02786fb91cf"></a>
<div class="memitem">
<div class="memproto">
<div class="memtemplate">
template&lt;typename T&gt; </div>
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a>&lt;T&gt;&amp; <a class="el" href="classsf_1_1ThreadLocalPtr.php">sf::ThreadLocalPtr</a>&lt; T &gt;::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1ThreadLocalPtr.php">ThreadLocalPtr</a>&lt; T &gt; &amp;&#160;</td>
          <td class="paramname"><em>right</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Assignment operator for a <a class="el" href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. ">ThreadLocalPtr</a> parameter. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">right</td><td><a class="el" href="classsf_1_1ThreadLocalPtr.php" title="Pointer to a thread-local variable. ">ThreadLocalPtr</a> to assign</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Reference to self </dd></dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="ThreadLocalPtr_8hpp_source.php">ThreadLocalPtr.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer-fr.php");
?>
