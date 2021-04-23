<?php
$design['title']       = 'LPMJ Book - Loops';
$design['description'] = 'Loops activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "loops, 1, 2, 0, 12, 10, twelve, ten, one, two, zero, times, divide, multiplication, table, by, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
<h2>by Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
<br>This code uses different types of loops to make the 12 times and 12 division tables, among other 


functions.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';

$design['RIGHT'] .= "<h1>Expanded while</h1>";
$count            = 0;
while ($count <= 12) {
	$design['RIGHT'] .= "$count times 12 is ";
	$design['RIGHT'] .= $count * 12;
	$design['RIGHT'] .= ".
";
	++$count;
}

$design['RIGHT'] .= "<h1>Compressed while</h1>";
$count            = -1;
while (++$count <= 12) {
	$design['RIGHT'] .= "$count times 12 is ";
	$design['RIGHT'] .= $count * 12;
	$design['RIGHT'] .= ".
";
}

$design['RIGHT'] .= "<h1>do...while</h1>";
$count            = 0;
do {
	$design['RIGHT'] .= "$count times 12 is ";
	$design['RIGHT'] .= $count * 12;
	$design['RIGHT'] .= ".
";
} while (++$count <= 12);

$design['RIGHT'] .= "<h1>for</h1>";
for ($count = 0; $count <= 12; ++$count) {
	$design['RIGHT'] .= "$count times 12 is ";
	$design['RIGHT'] .= $count * 12;
	$design['RIGHT'] .= ".
";
}

$design['RIGHT'] .= '<h1>break</h1><i>This code writes "data" to <a href="CH04-09 fopen (data).txt">a text file</a> 100 times or until an error is encountered.</i>
';
$fp               = fopen("CH04-09 fopen (data).txt", 'wb');
for ($i = 0; $i < 100; ++$i) {
	if (!fwrite($fp, "data")) {
		break;
	}
}

$design['RIGHT'] .= "<h1>continue</h1>";
$i                = 10;
while ($i > -10) {
	$i--;
	if ($i == 0) {
		continue;
	}

	$design['RIGHT'] .= "10 divided by $i is ";
	$design['RIGHT'] .= 10 / $i;
	$design['RIGHT'] .= ".
";
}

$design['RIGHT'] .= "<h1>Forever (while)</h1>
<i><a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php/CH04-09%20MAY%20CRASH%20BROWSER%20foreverLoop%20(theresEnoughFuel).php'>This loop mas moved here for preformance reasons. Be careful, this loop may crash your browser!</a></i>";

$design['RIGHT'] .= '</pre>';
require_once '../twoColumnDesign.php';
