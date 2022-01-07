<?php
$design['title']       = "LPMJ Book - Constants";
$design['description'] = "Constants acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'constants, file paths, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to teach me about constants. First I experimented with my own constant, then with PHP's pre-defined ones (some of the pre-defined ones, ironically, change).
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
define("ROOT_LOCATION", "/home/rpreidco/paul-s-reid/coding/");
$design['RIGHT'] .= ROOT_LOCATION;
$design['RIGHT'] .= "<br>";
$directory        = ROOT_LOCATION;
$design['RIGHT'] .= $directory;
$design['RIGHT'] .= "<hr>";
$design['RIGHT'] .= __LINE__;
$design['RIGHT'] .= "<br>";
$design['RIGHT'] .= __FILE__;
$design['RIGHT'] .= "<br>";
$design['RIGHT'] .= __DIR__;
$design['RIGHT'] .= "<hr>This is line " . __LINE__ . " of file " . __FILE__ . ".
</pre>";
require_once "../twoColumnDesign.php";
