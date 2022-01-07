<?php
$design['title']       = "LPMJ Book - Operator associativity";
$design['description'] = "Operator associativity acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'operator associativity, operator, associativity, 0, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>This code shows that, due to the fact that the '=' operator has a associativity of right to left (meaning that things on the right are evaluated first), you can set variables in bulk, if they all are being set to the same value. Here I bulk set three variables to a value of "0" and print them all out.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$level                 = $score        = $time        = 0;
$design['RIGHT']      .= "$level
$score
$time
</pre>";
require_once "../twoColumnDesign.php";
