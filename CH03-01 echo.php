<?php
$design['title']       = "LPMJ Book - Hello, World!";
$design['description'] = "Hello World script from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'echo, prints, values, hello, world, hello world, script, first, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>This code is the classic Hello World script, which is possible to do in any coding language. It's simple: it prints out "Hello World!"
<br>It teches me about "echo" which is how PHP prints out values.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$design['RIGHT']      .= "Hello, world!
</pre>";
require_once "../twoColumnDesign.php";
