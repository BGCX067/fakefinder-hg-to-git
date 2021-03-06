


<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>index.php at master from mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source - GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />

    
    

    <meta content="authenticity_token" name="csrf-param" />
<meta content="8BnE8j5XNYSKOJrJMVScKwyNgDLxW963HjRK+B/tthg=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundles/github-e99d6cd1ba845aee419becbfcd08b713f4bf0a55.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/stylesheets/bundles/github2-295a02b2f2bdc835d7af368e96a0579808719484.css" media="screen" rel="stylesheet" type="text/css" />
    

    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundles/jquery-e46225f266eba00902b2e5b66fe6fe6a484fb242.js" type="text/javascript"></script>
    <script src="https://a248.e.akamai.net/assets.github.com/javascripts/bundles/github-830663fa08e4c11281973c8dc5a5c0819ae73192.js" type="text/javascript"></script>
    

      <link rel='permalink' href='/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/blob/e3a5b42772674f0f4a50fd4277eb6b01bcf10395/index.php'>

    <meta name="description" content="PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source - Facebook recently updated their PHP-SDK to version 3.0 also added new way of authentication. This is a major change. So this is the updated post of my old popular post.  In this version of my code, I avoided javascript authentication, because that is cookie based and php sdk 3.0 has some conflicts with the old system. Facebook will also update the javascript sdk soon, so later you can use the login/logout system of javascript api with php sdk. But for now you should use fully php base authentication." />
  <link href="https://github.com/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/commits/master.atom" rel="alternate" title="Recent Commits to PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production ">
    


    

      <div id="header" class="true clearfix">
        <div class="container clearfix">
          <a class="site-logo" href="https://github.com">
            <!--[if IE]>
            <img alt="GitHub" class="github-logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7.png?1323882799" />
            <img alt="GitHub" class="github-logo-hover" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7-hover.png?1324325436" />
            <![endif]-->
            <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1323882799" />
            <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1324325436" />
          </a>

                  <!--
      make sure to use fully qualified URLs here since this nav
      is used on error pages on other domains
    -->
    <ul class="top-nav logged_out">
        <li class="pricing"><a href="https://github.com/plans">Signup and Pricing</a></li>
        <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
        <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      <li class="login"><a href="https://github.com/login?return_to=%2Fmahmudahsan%2FPHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source%2Fblob%2Fmaster%2Findex.php">Login</a></li>
    </ul>



          
        </div>
      </div>

      

            <div class="site">
      <div class="container">
        <div class="pagehead repohead instapaper_ignore readability-menu">


        <div class="title-actions-bar">
          <h1>
            <a href="/mahmudahsan">mahmudahsan</a> /
            <strong><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source" class="js-current-repository">PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source</a></strong>
          </h1>
          



              <ul class="pagehead-actions">


          <li><a href="/login?return_to=%2Fmahmudahsan%2FPHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source" class="minibutton btn-watch watch-button entice tooltipped leftwards" rel="nofollow" title="You must be logged in to use this feature"><span><span class="icon"></span>Watch</span></a></li>
          <li><a href="/login?return_to=%2Fmahmudahsan%2FPHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source" class="minibutton btn-fork fork-button entice tooltipped leftwards" rel="nofollow" title="You must be logged in to use this feature"><span><span class="icon"></span>Fork</span></a></li>


      <li class="repostats">
        <ul class="repo-stats">
          <li class="watchers ">
            <a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/watchers" title="Watchers" class="tooltipped downwards">
              22
            </a>
          </li>
          <li class="forks">
            <a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/network" title="Forks" class="tooltipped downwards">
              8
            </a>
          </li>
        </ul>
      </li>
    </ul>

        </div>

          

  <ul class="tabs">
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/network" highlight="repo_networkrepo_fork_queue">Network</a>
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/issues" highlight="repo_issues">Issues <span class='counter'>0</span></a></li>


    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/graphs" highlight="repo_graphsrepo_contributors">Stats &amp; Graphs</a></li>

  </ul>

  
<div class="frame frame-center tree-finder" style="display:none"
      data-tree-list-url="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/tree-list/e3a5b42772674f0f4a50fd4277eb6b01bcf10395"
      data-blob-url-prefix="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/blob/e3a5b42772674f0f4a50fd4277eb6b01bcf10395"
    >

  <div class="breadcrumb">
    <b><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source">PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source</a></b> /
    <input class="tree-finder-input js-navigation-enable" type="text" name="query" autocomplete="off" spellcheck="false">
  </div>

    <div class="octotip">
      <p>
        <a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever" rel="nofollow">Dismiss</a>
        <strong>Octotip:</strong> You've activated the <em>file finder</em>
        by pressing <span class="kbd">t</span> Start typing to filter the
        file list. Use <span class="kbd badmono">↑</span> and
        <span class="kbd badmono">↓</span> to navigate,
        <span class="kbd">enter</span> to view files.
      </p>
    </div>

  <table class="tree-browser" cellpadding="0" cellspacing="0">
    <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
    <tr class="js-no-results no-results" style="display: none">
      <th colspan="2">No matching files</th>
    </tr>
    <tbody class="js-results-list js-navigation-container">
    </tbody>
  </table>
</div>

<div id="jump-to-line" style="display:none">
  <h2>Jump to Line</h2>
  <form>
    <input class="textfield" type="text">
    <div class="full-button">
      <button type="submit" class="classy">
        <span>Go</span>
      </button>
    </div>
  </form>
</div>


<div class="subnav-bar">

  <ul class="actions subnav">
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/tags" class="blank" highlight="repo_tags">Tags <span class="counter">0</span></a></li>
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/downloads" class="blank downloads-blank" highlight="repo_downloads">Downloads <span class="counter">0</span></a></li>
    
  </ul>

  <ul class="scope">
    <li class="switcher">

      <div class="context-menu-container js-menu-container">
        <a href="#"
           class="minibutton bigger switcher context-menu-button js-menu-target js-commitish-button btn-branch repo-tree"
           data-master-branch="master"
           data-ref="master">
          <span><span class="icon"></span><i>branch:</i> master</span>
        </a>

        <div class="context-pane commitish-context js-menu-content">
          <a href="javascript:;" class="close js-menu-close"></a>
          <div class="context-title">Switch Branches/Tags</div>
          <div class="context-body pane-selector commitish-selector js-filterable-commitishes">
            <div class="filterbar">
              <div class="placeholder-field js-placeholder-field">
                <label class="placeholder" for="context-commitish-filter-field" data-placeholder-mode="sticky">Filter branches/tags</label>
                <input type="text" id="context-commitish-filter-field" class="commitish-filter" />
              </div>

              <ul class="tabs">
                <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
                <li><a href="#" data-filter="tags">Tags</a></li>
              </ul>
            </div>

              <div class="commitish-item branch-commitish selector-item">
                <h4>
                    <a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/blob/master/index.php" data-name="master" rel="nofollow">master</a>
                </h4>
              </div>


            <div class="no-results" style="display:none">Nothing to show</div>
          </div>
        </div><!-- /.commitish-context-context -->
      </div>

    </li>
  </ul>

  <ul class="subnav with-scope">
    
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source" class="selected" highlight="repo_source">Files</a></li>
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/commits/master" highlight="repo_commits">Commits</a></li>
    <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/branches" class="" highlight="repo_branches" rel="nofollow">Branches <span class="counter">1</span></a></li>
  </ul>

</div>

  
  
  


          

        </div><!-- /.repohead -->

        




  
  <p class="last-commit">Latest commit to the <strong>master</strong> branch</p>

<div class="commit commit-tease js-details-container">
  <p class="commit-title ">
      <a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/commit/e3a5b42772674f0f4a50fd4277eb6b01bcf10395" class="message">Removed old file that was included with this source.</a>
      
  </p>
  <div class="commit-meta">
    <a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/commit/e3a5b42772674f0f4a50fd4277eb6b01bcf10395" class="sha-block">commit <span class="sha">e3a5b42772</span></a>
    <span class="js-clippy clippy-button " data-clipboard-text="e3a5b42772674f0f4a50fd4277eb6b01bcf10395" data-copied-hint="copied!" data-copy-hint="Copy SHA"></span>

    <div class="authorship">
      <img class="gravatar" height="20" src="https://secure.gravatar.com/avatar/f2b8bb2876f5025fff03d05114ad4cd2?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-140.png" width="20" />
      <span class="author-name"><a href="/mahmudahsan">mahmudahsan</a></span>
      authored <time class="js-relative-date" datetime="2011-09-09T07:26:27-07:00" title="2011-09-09 07:26:27">September 09, 2011</time>

    </div>
  </div>
</div>


<!-- block_view_fragment_key: views4/v8/blob:v16:68ae8590101ccf33255aa28de1dc016e -->
  <div id="slider">

    <div class="breadcrumb" data-path="index.php/">
      <b><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/tree/e3a5b42772674f0f4a50fd4277eb6b01bcf10395" class="js-rewrite-sha">PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source</a></b> / index.php <span class="js-clippy clippy-button " data-clipboard-text="index.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>

    <div class="frames">
      <div class="frame frame-center" data-path="index.php/" data-permalink-url="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/blob/e3a5b42772674f0f4a50fd4277eb6b01bcf10395/index.php" data-title="index.php at master from mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source - GitHub" data-type="blob">
          <ul class="big-actions">
            <li><a class="file-edit-link minibutton js-rewrite-sha" href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/edit/e3a5b42772674f0f4a50fd4277eb6b01bcf10395/index.php" data-method="post" rel="nofollow"><span>Edit this file</span></a></li>
          </ul>

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><img alt="Txt" height="16" src="https://a248.e.akamai.net/assets.github.com/images/icons/txt.png?1252203928" width="16" /></span>
                <span class="mode" title="File Mode">100644</span>
                  <span>143 lines (129 sloc)</span>
                <span>5.62 kb</span>
              </div>
              <ul class="actions">
                <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/raw/master/index.php" id="raw-url">raw</a></li>
                  <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/blame/master/index.php">blame</a></li>
                <li><a href="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/commits/master/index.php" rel="nofollow">history</a></li>
              </ul>
            </div>
              <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="cp">&lt;?php</span></div><div class='line' id='LC2'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">include_once</span> <span class="s2">&quot;fbmain.php&quot;</span><span class="p">;</span></div><div class='line' id='LC3'><span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC4'><span class="x">&lt;!DOCTYPE html&gt;</span></div><div class='line' id='LC5'><span class="x">&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; xmlns:fb=&quot;http://www.facebook.com/2008/fbml&quot;&gt;</span></div><div class='line' id='LC6'><span class="x">    &lt;head&gt;</span></div><div class='line' id='LC7'><span class="x">        &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot;/&gt;</span></div><div class='line' id='LC8'><span class="x">        &lt;title&gt;PHP SDK 3.0 &amp; Graph API base FBConnect Tutorial | Thinkdiff.net&lt;/title&gt;</span></div><div class='line' id='LC9'><span class="x">    </span></div><div class='line' id='LC10'><span class="x">        &lt;script type=&quot;text/javascript&quot;&gt;</span></div><div class='line' id='LC11'><span class="x">            function streamPublish(name, description, hrefTitle, hrefLink, userPrompt){        </span></div><div class='line' id='LC12'><span class="x">                FB.ui({ method : &#39;feed&#39;, </span></div><div class='line' id='LC13'><span class="x">                        message: userPrompt,</span></div><div class='line' id='LC14'><span class="x">                        link   :  hrefLink,</span></div><div class='line' id='LC15'><span class="x">                        caption:  hrefTitle,</span></div><div class='line' id='LC16'><span class="x">                        picture: &#39;http://thinkdiff.net/ithinkdiff.png&#39;</span></div><div class='line' id='LC17'><span class="x">               });</span></div><div class='line' id='LC18'><span class="x">               //http://developers.facebook.com/docs/reference/dialogs/feed/</span></div><div class='line' id='LC19'><span class="x">   </span></div><div class='line' id='LC20'><span class="x">            }</span></div><div class='line' id='LC21'><span class="x">            function publishStream(){</span></div><div class='line' id='LC22'><span class="x">                streamPublish(&quot;Stream Publish&quot;, &#39;Checkout iOS apps and games from iThinkdiff.net. I found some of them are just awesome!&#39;, &#39;Checkout iThinkdiff.net&#39;, &#39;http://ithinkdiff.net&#39;, &quot;Demo Facebook Application Tutorial&quot;);</span></div><div class='line' id='LC23'><span class="x">            }</span></div><div class='line' id='LC24'><span class="x">            </span></div><div class='line' id='LC25'><span class="x">            function newInvite(){</span></div><div class='line' id='LC26'><span class="x">                 var receiverUserIds = FB.ui({ </span></div><div class='line' id='LC27'><span class="x">                        method : &#39;apprequests&#39;,</span></div><div class='line' id='LC28'><span class="x">                        message: &#39;Come on man checkout my applications. visit http://ithinkdiff.net&#39;,</span></div><div class='line' id='LC29'><span class="x">                 },</span></div><div class='line' id='LC30'><span class="x">                 function(receiverUserIds) {</span></div><div class='line' id='LC31'><span class="x">                          console.log(&quot;IDS : &quot; + receiverUserIds.request_ids);</span></div><div class='line' id='LC32'><span class="x">                        }</span></div><div class='line' id='LC33'><span class="x">                 );</span></div><div class='line' id='LC34'><span class="x">                 //http://developers.facebook.com/docs/reference/dialogs/requests/</span></div><div class='line' id='LC35'><span class="x">            }</span></div><div class='line' id='LC36'><span class="x">        &lt;/script&gt;</span></div><div class='line' id='LC37'><span class="x">    &lt;/head&gt;</span></div><div class='line' id='LC38'><span class="x">&lt;body&gt;</span></div><div class='line' id='LC39'><span class="x">    </span></div><div class='line' id='LC40'><span class="x">&lt;style type=&quot;text/css&quot;&gt;</span></div><div class='line' id='LC41'><span class="x">    .box{</span></div><div class='line' id='LC42'><span class="x">        margin: 5px;</span></div><div class='line' id='LC43'><span class="x">        border: 1px solid #60729b;</span></div><div class='line' id='LC44'><span class="x">        padding: 5px;</span></div><div class='line' id='LC45'><span class="x">        width: 500px;</span></div><div class='line' id='LC46'><span class="x">        height: 200px;</span></div><div class='line' id='LC47'><span class="x">        overflow:auto;</span></div><div class='line' id='LC48'><span class="x">        background-color: #e6ebf8;</span></div><div class='line' id='LC49'><span class="x">    }</span></div><div class='line' id='LC50'><span class="x">&lt;/style&gt;</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'><span class="x">&lt;div id=&quot;fb-root&quot;&gt;&lt;/div&gt;</span></div><div class='line' id='LC53'><span class="x">    &lt;script type=&quot;text/javascript&quot; src=&quot;http://connect.facebook.net/en_US/all.js&quot;&gt;&lt;/script&gt;</span></div><div class='line' id='LC54'><span class="x">     &lt;script type=&quot;text/javascript&quot;&gt;</span></div><div class='line' id='LC55'><span class="x">       FB.init({</span></div><div class='line' id='LC56'><span class="x">         appId  : &#39;</span><span class="cp">&lt;?</span><span class="o">=</span><span class="nv">$fbconfig</span><span class="p">[</span><span class="s1">&#39;appid&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&#39;,</span></div><div class='line' id='LC57'><span class="x">         status : true, // check login status</span></div><div class='line' id='LC58'><span class="x">         cookie : true, // enable cookies to allow the server to access the session</span></div><div class='line' id='LC59'><span class="x">         xfbml  : true  // parse XFBML</span></div><div class='line' id='LC60'><span class="x">       });</span></div><div class='line' id='LC61'><span class="x">       </span></div><div class='line' id='LC62'><span class="x">     &lt;/script&gt;</span></div><div class='line' id='LC63'><br/></div><div class='line' id='LC64'><span class="x">    &lt;a href=&quot;http://ithinkdiff.net&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none;&quot;&gt;</span></div><div class='line' id='LC65'><span class="x">       &lt;img src=&quot;http://ftechdb.com/ithinkdiff.net-banner.jpg&quot; style=&quot;border:none&quot; alt=&quot;Download iPhone/iPad Dictionaries, Applications &amp; Games&quot; height=&quot;92&quot; /&gt;</span></div><div class='line' id='LC66'><span class="x">   &lt;/a&gt;</span></div><div class='line' id='LC67'><span class="x">   &lt;br /&gt;</span></div><div class='line' id='LC68'><span class="x">    &lt;h3&gt;PHP SDK 3.0 &amp; Graph API base FBConnect Tutorial | Thinkdiff.net&lt;/h3&gt;</span></div><div class='line' id='LC69'><span class="x">    &lt;a href=&quot;http://thinkdiff.net/facebook-connect/php-sdk-3-0-graph-api-base-facebook-connect-tutorial/&quot; target=&quot;_blank&quot;&gt;Tutorial: PHP SDK 3.0 &amp; Graph API base Facebook Connect Tutorial&lt;/a&gt; &lt;br /&gt;&lt;br /&gt;</span></div><div class='line' id='LC70'><span class="x">    &lt;br /&gt;</span></div><div class='line' id='LC71'><span class="x">    </span></div><div class='line' id='LC72'><span class="x">    </span></div><div class='line' id='LC73'><span class="x">    </span></div><div class='line' id='LC74'><span class="x">    </span><span class="cp">&lt;?php</span> <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$user</span><span class="p">)</span> <span class="p">{</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC75'><span class="x">        You&#39;ve to login using FB Login Button to see api calling result.</span></div><div class='line' id='LC76'><span class="x">        &lt;a href=&quot;</span><span class="cp">&lt;?</span><span class="o">=</span><span class="nv">$loginUrl</span><span class="cp">?&gt;</span><span class="x">&quot;&gt;Facebook Login&lt;/a&gt;</span></div><div class='line' id='LC77'><span class="x">    </span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="k">else</span> <span class="p">{</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC78'><span class="x">        &lt;a href=&quot;</span><span class="cp">&lt;?</span><span class="o">=</span><span class="nv">$logoutUrl</span><span class="cp">?&gt;</span><span class="x">&quot;&gt;Facebook Logout&lt;/a&gt;</span></div><div class='line' id='LC79'><span class="x">    </span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC80'><br/></div><div class='line' id='LC81'><span class="x">    &lt;!-- all time check if user session is valid or not --&gt;</span></div><div class='line' id='LC82'><span class="x">    </span><span class="cp">&lt;?php</span> <span class="k">if</span> <span class="p">(</span><span class="nv">$user</span><span class="p">){</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC83'><span class="x">    &lt;table border=&quot;0&quot; cellspacing=&quot;3&quot; cellpadding=&quot;3&quot;&gt;</span></div><div class='line' id='LC84'><span class="x">        &lt;tr&gt;</span></div><div class='line' id='LC85'><span class="x">            &lt;td&gt;</span></div><div class='line' id='LC86'><span class="x">                &lt;!-- Data retrived from user profile are shown here --&gt;</span></div><div class='line' id='LC87'><span class="x">                &lt;div class=&quot;box&quot;&gt;</span></div><div class='line' id='LC88'><span class="x">                    &lt;b&gt;User Information using Graph API&lt;/b&gt;</span></div><div class='line' id='LC89'><span class="x">                    </span><span class="cp">&lt;?php</span> <span class="nx">d</span><span class="p">(</span><span class="nv">$userInfo</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC90'><span class="x">                &lt;/div&gt;</span></div><div class='line' id='LC91'><span class="x">            &lt;/td&gt;</span></div><div class='line' id='LC92'><span class="x">            &lt;td&gt;           </span></div><div class='line' id='LC93'><span class="x">                &lt;div class=&quot;box&quot;&gt;</span></div><div class='line' id='LC94'><span class="x">                    &lt;b&gt;User likes these movies | using graph api&lt;/b&gt;</span></div><div class='line' id='LC95'><span class="x">                     </span><span class="cp">&lt;?php</span> <span class="nx">d</span><span class="p">(</span><span class="nv">$movies</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC96'><span class="x">                &lt;/div&gt;</span></div><div class='line' id='LC97'><span class="x">            &lt;/td&gt;</span></div><div class='line' id='LC98'><span class="x">        &lt;/tr&gt;</span></div><div class='line' id='LC99'><span class="x">        &lt;tr&gt;</span></div><div class='line' id='LC100'><span class="x">            &lt;td&gt;</span></div><div class='line' id='LC101'><span class="x">                &lt;div class=&quot;box&quot;&gt;</span></div><div class='line' id='LC102'><span class="x">                    &lt;b&gt;Wall Post &amp; Invite Friends&lt;/b&gt;</span></div><div class='line' id='LC103'><span class="x">                    &lt;br /&gt;&lt;br /&gt;</span></div><div class='line' id='LC104'><span class="x">                    &lt;a href=&quot;</span><span class="cp">&lt;?</span><span class="o">=</span><span class="nv">$fbconfig</span><span class="p">[</span><span class="s1">&#39;baseurl&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">?publish=1&quot;&gt;Publish Post using PHP &lt;/a&gt;</span></div><div class='line' id='LC105'><span class="x">                    &lt;br /&gt;</span></div><div class='line' id='LC106'><span class="x">                    You can also publish wall post to user&#39;s wall via Ajax.</span></div><div class='line' id='LC107'><span class="x">                    </span><span class="cp">&lt;?php</span> <span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$_GET</span><span class="p">[</span><span class="s1">&#39;success&#39;</span><span class="p">]))</span> <span class="p">{</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC108'><span class="x">                        &lt;br /&gt;</span></div><div class='line' id='LC109'><span class="x">                        &lt;strong style=&quot;color: red&quot;&gt;Wall post published in your wall successfully!&lt;/strong&gt;</span></div><div class='line' id='LC110'><span class="x">                    </span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC111'><span class="x">                        </span></div><div class='line' id='LC112'><span class="x">                    &lt;br /&gt;&lt;br /&gt;</span></div><div class='line' id='LC113'><span class="x">                    &lt;a href=&quot;#&quot; onclick=&quot;publishStream(); return false;&quot;&gt;Publish Wall post using Facebook Javascript&lt;/a&gt;</span></div><div class='line' id='LC114'><span class="x">                    </span></div><div class='line' id='LC115'><span class="x">                    &lt;br /&gt;&lt;br /&gt;</span></div><div class='line' id='LC116'><span class="x">                    &lt;a href=&quot;#&quot; onclick=&quot;newInvite(); return false;&quot;&gt;Invite Friends&lt;/a&gt;</span></div><div class='line' id='LC117'><span class="x">                &lt;/div&gt;</span></div><div class='line' id='LC118'><span class="x">            &lt;/td&gt;</span></div><div class='line' id='LC119'><span class="x">            &lt;td&gt;</span></div><div class='line' id='LC120'><span class="x">                &lt;div class=&quot;box&quot;&gt;</span></div><div class='line' id='LC121'><span class="x">                    &lt;b&gt;FQL Query Example by calling Legacy API method &quot;fql.query&quot;&lt;/b&gt;</span></div><div class='line' id='LC122'><span class="x">                    </span><span class="cp">&lt;?php</span> <span class="nx">d</span><span class="p">(</span><span class="nv">$fqlResult</span><span class="p">);</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC123'><span class="x">                &lt;/div&gt;</span></div><div class='line' id='LC124'><span class="x">            &lt;/td&gt;</span></div><div class='line' id='LC125'><span class="x">        &lt;/tr&gt;</span></div><div class='line' id='LC126'><span class="x">    &lt;/table&gt;</span></div><div class='line' id='LC127'><span class="x">    &lt;div class=&quot;box&quot;&gt;</span></div><div class='line' id='LC128'><span class="x">        &lt;form name=&quot;&quot; action=&quot;</span><span class="cp">&lt;?</span><span class="o">=</span><span class="nv">$fbconfig</span><span class="p">[</span><span class="s1">&#39;baseurl&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&quot; method=&quot;post&quot;&gt;</span></div><div class='line' id='LC129'><span class="x">            &lt;label for=&quot;tt&quot;&gt;Status update using Graph API&lt;/label&gt;</span></div><div class='line' id='LC130'><span class="x">            &lt;br /&gt;</span></div><div class='line' id='LC131'><span class="x">            &lt;textarea id=&quot;tt&quot; name=&quot;tt&quot; cols=&quot;50&quot; rows=&quot;5&quot;&gt;Write your status here and click &#39;Update My Status&#39;&lt;/textarea&gt;</span></div><div class='line' id='LC132'><span class="x">            &lt;br /&gt;</span></div><div class='line' id='LC133'><span class="x">            &lt;input type=&quot;submit&quot; value=&quot;Update My Status&quot; /&gt;</span></div><div class='line' id='LC134'><span class="x">        &lt;/form&gt;</span></div><div class='line' id='LC135'><span class="x">        </span><span class="cp">&lt;?php</span> <span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$statusUpdate</span><span class="p">))</span> <span class="p">{</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC136'><span class="x">            &lt;br /&gt;</span></div><div class='line' id='LC137'><span class="x">            &lt;strong style=&quot;color: red&quot;&gt;Status Updated Successfully! Status id is </span><span class="cp">&lt;?</span><span class="o">=</span><span class="nv">$statusUpdate</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">]</span><span class="cp">?&gt;</span><span class="x">&lt;/strong&gt;</span></div><div class='line' id='LC138'><span class="x">         </span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC139'><span class="x">    &lt;/div&gt;</span></div><div class='line' id='LC140'><span class="x">    </span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class='line' id='LC141'><br/></div><div class='line' id='LC142'><span class="x">    &lt;/body&gt;</span></div><div class='line' id='LC143'><span class="x">&lt;/html&gt;</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>

  </div>

<div class="frame frame-loading" style="display:none;" data-tree-list-url="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/tree-list/e3a5b42772674f0f4a50fd4277eb6b01bcf10395" data-blob-url-prefix="/mahmudahsan/PHP-SDK-3.0---Graph-API-base-Facebook-Connect-Tutorial-Source/blob/e3a5b42772674f0f4a50fd4277eb6b01bcf10395">
  <img src="https://a248.e.akamai.net/assets.github.com/images/modules/ajax/big_spinner_336699.gif?1252203928" height="32" width="32">
</div>

      </div>
      <div class="context-overlay"></div>
    </div>


      <!-- footer -->
      <div id="footer" >
        
  <div class="upper_footer">
     <div class="container clearfix">

       <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
       <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="https://github.com/training">Training</a></li>
         <li><a href="http://enterprise.github.com/">GitHub Enterprise</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://get.gaug.es/">Gauges: Analyze web traffic</a></li>
         <li><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></li>
         <li><a href="https://gist.github.com">Gist: Code snippets</a></li>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://mobile.github.com/">Issues for iPhone</a></li>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Extras</h4>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="container clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2012 <span title="0.13120s from fe3.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

      <div class="sponsor">
        <a href="http://www.rackspace.com" class="logo">
          <img alt="Dedicated Server" height="36" src="https://a248.e.akamai.net/assets.github.com/images/modules/footer/rackspace_logo.png?v2" width="38" />
        </a>
        Powered by the <a href="http://www.rackspace.com ">Dedicated
        Servers</a> and<br/> <a href="http://www.rackspacecloud.com">Cloud
        Computing</a> of Rackspace Hosting<span>&reg;</span>
      </div>
  </div><!-- /.site -->
</div><!-- /.lower_footer -->

      </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column middle">
        <dl class="keyboard-mappings">
          <dt>I</dt>
          <dd>Mark selection as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>U</dt>
          <dd>Mark selection as unread</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>e</dt>
          <dd>Close selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Remove selection from view</dd>
        </dl>
      </div><!-- /.column.middle -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>
</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div class="ajax-error-message">
      <p><span class="icon"></span> Something went wrong with that request. Please try again. <a href="javascript:;" class="ajax-error-dismiss">Dismiss</a></p>
    </div>

    
    
    
    <span id='server_response_time' data-time='0.15716' data-host='fe3'></span>
  </body>
</html>

