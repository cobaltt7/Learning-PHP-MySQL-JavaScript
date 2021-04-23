<?php
$design['title']       = "LPMJ Book - Variables";
$design['description'] = "Variable activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'variables, fred, smith, fred smith, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>This code teaches me about the basics of variables. Fist I set a variable to a string. Next I sat a second variable to the first variable.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$username              = "Fred Smith";
$design['RIGHT']      .= $username;
$design['RIGHT']      .= "<br>";
$current_user          = $username;
$design['RIGHT']      .= $current_user;
$design['RIGHT']      .= "</pre>";
require_once "../twoColumnDesign.php";
