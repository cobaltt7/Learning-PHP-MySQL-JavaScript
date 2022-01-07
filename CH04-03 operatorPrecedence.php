<?php
$design['title']       = "LPMJ Book - Operator precedence";
$design['description'] = "Operator precedence activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'operator, operator precedence, precedence, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>When you move around numbers and their preseeding opereators, as long as their precedence is the same, the result would also be the same, as shown in the first section.
<br>But if the operators' precedence is different, the result would be different as well (see the second section). If if all of those operators had the same precedence, the result would be different.
<br>The third section shows that it is like there are parentheses around some parts, which get evaluated first.
<br>As shown in the forth and last section, you can add your own parentheses to choose your own evaluation order, such as left-to-right.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
$design['RIGHT']      .= "<ul><li>1+2+3-4+5: ";
$design['RIGHT']      .= 1 + 2 + 3 - 4 + 5;
$design['RIGHT']      .= "</li><li>2-4+5+3+1: ";
$design['RIGHT']      .= 2 - 4 + 5 + 3 + 1;
$design['RIGHT']      .= "</li><li>5+2-4+1+3: ";
$design['RIGHT']      .= 5 + 2 - 4 + 1 + 3;
$design['RIGHT']      .= "</li></ul><ul><li>1*2*3/4*5: ";
$design['RIGHT']      .= 1 * 2 * 3 / 4 * 5;
$design['RIGHT']      .= "</li><li>2/4*5*3*1: ";
$design['RIGHT']      .= 2 / 4 * 5 * 3 * 1;
$design['RIGHT']      .= "</li><li>5*2/4*1*3: ";
$design['RIGHT']      .= 5 * 2 / 4 * 1 * 3;
$design['RIGHT']      .= "</li></ul><hr><ul><li>1+2*3-4*5: ";
$design['RIGHT']      .= 1 + 2 * 3 - 4 * 5;
$design['RIGHT']      .= "</li><li>2-4*5*3+1: ";
$design['RIGHT']      .= 2 - 4 * 5 * 3 + 1;
$design['RIGHT']      .= "</li><li>5+2-4+1*3: ";
$design['RIGHT']      .= 5 + 2 - 4 + 1 * 3;
$design['RIGHT']      .= "</li></ul><hr><ul><li>1+(2*3)-(4*5): 1 + ";
$design['RIGHT']      .= 2 * 3;
$design['RIGHT']      .= " - ";
$design['RIGHT']      .= 4 * 5;
$design['RIGHT']      .= "</li><li>2-(4*5*3)+1: 2 - ";
$design['RIGHT']      .= 4 * 5 * 3;
$design['RIGHT']      .= " + 1
</li><li>5+2-4+(1*3): 5 + 2 - 4 + ";
$design['RIGHT']      .= 1 * 3;
$design['RIGHT']      .= "</li></ul><hr><ul><li>((1+2)*3-4)*5: ";
$design['RIGHT']      .= ((1 + 2) * 3 - 4) * 5;
$design['RIGHT']      .= "</li><li>(2-4)*5*3+1: ";
$design['RIGHT']      .= (2 - 4) * 5 * 3 + 1;
$design['RIGHT']      .= "</li><li>(5+2-4+1)*3: ";
$design['RIGHT']      .= (5 + 2 - 4 + 1) * 3;
$design['RIGHT']      .= "</li></ul>";
