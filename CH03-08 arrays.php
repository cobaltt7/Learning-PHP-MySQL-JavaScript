<?php
$design['title']       = "LPMJ Book - Arrays";
$design['description'] = "Array acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'array, chris, x, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to teach me about arrays.
<br>First, it makes a 5-item array and returns the foruth item. Then, it makes an array of three items. Each of those items is another array.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$team                  = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
$design['RIGHT']      .= $team[3];
$design['RIGHT']      .= '<br>';
$oxo                   = array(
	array('x', ' ', 'o'),
	array('o', 'o', 'x'),
	array('x', 'o', ' ')
);
$design['RIGHT']      .= $oxo[1][2];
$design['RIGHT']      .= "</pre>";
require_once "../twoColumnDesign.php";
