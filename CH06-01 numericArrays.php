<?php
$design['title']       = "LPMJ Book - Numeric Arrays";
$design['description'] = "Array activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'numeric, array, copier, scanner, printer, printers, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to teach me about numeric arrays.
<br>First I made an array, letting PHP handle where to put the items. Then I made one where I explicity told PHP where to put each value.
<br>For both of those, I used one of PHP's built-in 


functions to print them all out. I made a loop to print them out in a nicer-looking way.
<br>See what it evaluates to over there 👉 !
_END;
$design['RIGHT']       = '<pre class="code">';
$printers[]            = "Copier";
$printers[]            = "Inkjet";
$printers[]            = "Laser";
$printers[]            = "Photo";
$design['RIGHT']      .= '<br>';
$design['RIGHT']      .= print_r($printers, TRUE);
$printers[3]           = "Copier";
$printers[2]           = "Inkjet";
$printers[1]           = "Laser";
$printers[0]           = "Photo";
$design['RIGHT']      .= print_r($printers, TRUE);
$design['RIGHT']      .= '<br>';
for ($j = 0; $j < 4; ++$j) {
	$design['RIGHT'] .= $j + 1;
	$design['RIGHT'] .= ": $printers[$j]
";
}

$design['RIGHT'] .= "</pre>";
require_once "../twoColumnDesign.php";
