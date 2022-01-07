<?php
$design['title']       = "LPMJ Book - Booleans";
$design['description'] = "Boolean activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'TRUE, FALSE, NULL, boolean, comparison, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of this code is to teach me about booleans.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = "<pre class='code'>
TRUE: [" . TRUE . "]
FALSE: [" . FALSE . "]<hr>20 > 9: [" . (20 > 9) . "]
5 == 6: [" . (5 == 6) . "]
1 == 0: [" . (1 == 0) . "]
1 == 1: [" . (1 == 1) . "]
</pre>";
require_once "../twoColumnDesign.php";
