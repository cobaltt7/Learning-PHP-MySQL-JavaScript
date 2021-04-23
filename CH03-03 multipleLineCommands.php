<?php
$design['title']       = "LPMJ Book - Multiple line commands";
$design['description'] = "Acitvity on multiple line commands from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'quotes, commands, multiple, line, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to give me an understanding of the fact that you can add linebreaks in the middle of quotations and they will save to a variable or print out or etcetera. The first quote is one I just printed out directy. For the second, I put it in a variable, then printed the variable. The third I printed out a different way. Finally, the foruth I set to a variable using the alternate way then printed it out
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$author                = "Steve Ballmer";
$design['RIGHT']      .= "Developers, developers, developers, developers, developers, developers, developers, developers, developers!

- $author.<hr>";
$author                = "Bill Gates";
$text                  = "Measuring programming progress by lines of code is like measuring aircraft building progress by weight.

- $author.";
$design['RIGHT']      .= $text;
$design['RIGHT']      .= "<hr>";
$author                = "Brian W. Kerninghan";
$design['RIGHT']      .= <<<_END
Debugging is twice as hard as writing the code in the first place. Therefore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.

- $author.
_END;
$design['RIGHT']      .= "<hr>";
$author                = "Scott Adams";
$out                   = <<<_END
Normal people believe that if it ain't broke, don't fix it. Engineers belive that if it ain't broke, it doesn't have enough features yet.

- $author.
_END;
$design['RIGHT']      .= $out;
$design['RIGHT']      .= "</pre>";
require_once "../twoColumnDesign.php";
