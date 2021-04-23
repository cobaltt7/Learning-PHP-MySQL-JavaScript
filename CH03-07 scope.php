<?php
$design['title']       = "LPMJ Book - Variable scope";
$design['description'] = "Scope acitivty from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'variable, scope, date, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
LPMJ Book</h1>
<h2>by Robin Nixon</h2>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>This code experiments with different types of variables. I learn about variables only acsessible in 


functions, returning values, parameters, global variables, static variables, and superglobals.
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';


function longdate1($timestamp)
{
	$temp1 = date("l F jS Y", $timestamp);
	return "The date is $temp1.";
}


function longdate3($timestamp)
{
	return date("l F jS Y", $timestamp) . '.';
}


function longdate4($text, $timestamp)
{
	return $text . date("l F jS Y", $timestamp) . '.';
}


function longdate5($timestamp)
{
	global $TEMP5;
	return $TEMP5 . date("l F jS Y", $timestamp) . '.';
}


function test()
{
	static $count;
	global $design;
	$design['RIGHT'] .= $count . "<br>";
	$count++;
}


$design['RIGHT'] .= "LOCAL VARIABLES";

$design['RIGHT'] .= longdate1(time());
$design['RIGHT'] .= "<br>";

$temp3            = "The date is ";
$design['RIGHT'] .= $temp3 . longDate3(time());
$design['RIGHT'] .= "<br>";

$temp4            = "The date is ";
$design['RIGHT'] .= longDate4($temp4, time());

$design['RIGHT'] .= "<hr>GLOBAL VARIALBES";
$TEMP5            = "The date is ";
$design['RIGHT'] .= longDate5(time());

$design['RIGHT'] .= "<hr>STATIC VARIABLES";
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();
test();

$design['RIGHT'] .= "<hr>SUPERGLOBAL VARIABLES";
$design['RIGHT'] .= htmlentities($_SERVER['HTTP_REFERER']) . "</pre>";
require_once "../twoColumnDesign.php";
