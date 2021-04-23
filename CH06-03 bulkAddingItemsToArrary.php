<?php
$design['title']       = "LPMJ Book - Bulk Adding to Arrays";
$design['description'] = "Array activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'numeric, associative, array, copier, scanner, printer, printers, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to teach me about associative arrays.
<br>I made two arrays, but unlike the previous examples where I added ech item one-by-one, I added all of the items to the array at once! For both of them, I used one of PHP's built-in 


functions to print them all out.
<br>See what it evaluates to over there 👉 !
_END;
$design['RIGHT']       = '<pre class="code">';
$printers              = array("Copier", "Inkjet", "Laser", "Photo");
$design['RIGHT']      .= print_r($printers, TRUE);
$design['RIGHT']      .= '<br>';
$printers              = array(
	"Multi" => "Multipurpose Printer",
	"Ink"   => "Inkjet Printer",
	"Laser" => "Laserjet Printer",
	"Photo" => "Photographic Printer"
);
$design['RIGHT']      .= print_r($printers, TRUE);
$design['RIGHT']      .= "</pre>";
require_once "../twoColumnDesign.php";
