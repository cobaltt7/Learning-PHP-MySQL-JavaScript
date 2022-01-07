<?php
$design['title']       = "LPMJ Book - Casting";
$design['description'] = "Activity about the differences between implicit and explicit casting from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'number, float, floating, point, floating-point, integer, ., 56, divided, by, 12, /, fifty-six, twelve, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>In this activity, I learned that if you are preforming a calculaton, you can tell PHP what kind of result you will get. Here, the first time is aout, then the second time I tell it to take of the point.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">Implicit casting:
';
$design['RIGHT']      .= 56 / 12;
$design['RIGHT']      .= "Explicit casting:
";
$design['RIGHT']      .= (int)(56 / 12);
$design['RIGHT']      .= "</pre>";
require_once "../twoColumnDesign.php";
