<?php
$design['title']       = "LPMJ Book - Difference between literals and variables";
$design['description'] = "Literals verses variables activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'literal, variable, 73, hello, TRUE, myname, myage, name, age, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>This code shows the difference between a variable and a literal.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$myName                = "Brian";
$myAge                 = 37;
$design['RIGHT']      .= "
Numeric literal (73): " . 73 . "
String literal (\"Hello\"): '.'Hello'.'
Constant literal (TRUE): " . TRUE . "
String variable (\$myName): " . $myName . "
Numeric variable (\$myAge): " . $myAge . "</pre>";
require_once "../twoColumnDesign.php";
