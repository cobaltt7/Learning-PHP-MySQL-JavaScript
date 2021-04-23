<?php
$design['title']       = "LPMJ Book - 


functions";
$design['description'] = "


functions acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'date, 


functions, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to give me an introduction to 


functions. I created a 


function to convert PHP's date format (the number of seconds since a certain date) to something we can understand.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';


function longdate($timestamp)
{
	return date("l F jS Y", $timestamp);
}


$design['RIGHT'] .= "Today's date is " . longdate(time()) . ".
17 days ago, the date was " . longdate(time() - 17 * 24 * 60 * 60) . ".
</pre>";
require_once "../twoColumnDesign.php";
