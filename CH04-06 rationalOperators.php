<?php
$design['title']       = 'LPMJ Book - Rational Operators';
$design['description'] = 'Rational Operators acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "rational operators, springtime, equality, identity, first, if, logical, rational, operators, comparisons, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
<h2>by Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
<br>This code compares numbers to each other in different ways.
<br>See what it evaluates to over there 👉!
_END;


function equality($a, $b)
{
	global $design;
	$design['RIGHT'] .= "\$a = $a; \$b = $b";
	if ($a == $b) {
		$design['RIGHT'] .= "\$a is equal to \$b.";
	}

	if ($a === $b) {
		$design['RIGHT'] .= "\$a is the same as \$b.";
	}

	if ($a != $b) {
		$design['RIGHT'] .= "\$a is not equal to \$b.";
	}

	if ($a !== $b) {
		$design['RIGHT'] .= "\$a is not the same as \$b.";
	}

	$design['RIGHT'] .= "";
}


function comparison($a, $b)
{
	global $design;
	$design['RIGHT'] .= "\$a = $a; \$b = $b";
	if ($a > $b) {
		$design['RIGHT'] .= "\$a is greater than \$b.";
	}

	if ($a < $b) {
		$design['RIGHT'] .= "\$a is less than \$b.";
	}

	if ($a >= $b) {
		$design['RIGHT'] .= "\$a is greater than or equal to \$b.";
	}

	if ($a <= $b) {
		$design['RIGHT'] .= "\$a is less than or equal to \$b.";
	}

	if ($a == $b) {
		$design['RIGHT'] .= "\$a is equal to \$b.";
	}

	$design['RIGHT'] .= "";
}


function logical($a, $b)
{
	global $design;
	$design['RIGHT'] .= "\$a = $a; \$b = $b";
	if ($a) {
		$design['RIGHT'] .= "\$a is TRUE.";
	}

	if ($b) {
		$design['RIGHT'] .= "\$b is TRUE.";
	}

	if (!$a) {
		$design['RIGHT'] .= "\$a is not TRUE.";
	}

	if (!$b) {
		$design['RIGHT'] .= "\$b is not TRUE.";
	}

	if ($a && $b) {
		$design['RIGHT'] .= "\$a and \$b are both TRUE.";
	}

	if ($a || $b) {
		$design['RIGHT'] .= "\$a or \$b is TRUE, maybe both.";
	}

	if ($a xor $b) {
		$design['RIGHT'] .= "\$a or \$b is TRUE, but not both.";
	}

	$design['RIGHT'] .= "";
}


$design['RIGHT']  = '<pre class="code">';
$design['RIGHT'] .= "<h1>My first 'if' statememt</h1>";
$month            = "March";
if ($month == "March") {
	global $design;
	$design['RIGHT'] .= "It's springtime";
}

$design['RIGHT'] .= "<hr><h1>Equality vesus identity versus inequality versus inidenity operators</h1>";
equality("1000", "+1000");
equality("1000", "1000");
equality(1000, 1000);
equality("+1000", "+1000");
equality(+1000, +1000);
equality(999, +1000);
equality("999", "+1000");
equality("999", "1000");
equality(999, 1000);
equality("+999", "+1000");

$design['RIGHT'] .= "<hr><h1>Comparison operators</h1>";
comparison(3, 2);
comparison(2, 2);
comparison(2, 3);
comparison(3, 3);

$design['RIGHT'] .= "<hr><h1>Logical operators</h1>";
logical(1, 0);
logical(0, 0);
logical(0, 1);
logical(1, 1);

$design['RIGHT'] .= "</pre>";
require_once '../twoColumnDesign.php';
