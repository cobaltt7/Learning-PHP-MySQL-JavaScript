<?php
$design['title']       = 'LPMJ Book - Forever loop';
$design['description'] = 'Forever loop from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "crash, browser, forever, loop, enough, fuel, while, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
<h2>by Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
<br>This code uses a while loop tht sets a variable to 10, then repeats untill it's 1. But there is no code to make it go down! So, this loop goes forever. Be careful, this loop might crash your browser!
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$design['RIGHT']      .= "<h1>Forever (while)</h1>
<i><a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php/CH04-08%20loops%20(12TimesTable10DivisionTable).php'>This loop mas moved from here for preformance reasons. Be careful, this loop may crash your browser!</a></i>";
$fuel                  = 10;
while ($fuel > 1) {
	$design['RIGHT'] .= "There's enough fuel.
";
}

$design['RIGHT'] .= '</pre>';
require_once '../twoColumnDesign.php';
