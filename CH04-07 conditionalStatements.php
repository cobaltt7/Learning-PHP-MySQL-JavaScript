<?php
$design['title']       = "LPMJ Book - Conditional statements";
$design['description'] = "Conditional acitvity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'conditional, menu, home, about, news, login, links, php, section, selected, statements, money, bank, savings, fuel, , book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>Here I am experimenting with different types of conditional statements.
<br>First I use IF to say: IF I have less than $100, pay me $1000.
<br>Next I use IF and ELSE to say: IF I have less than $100, pay me $1000, ELSE put $50 into savings.
<br>Thirdly I use IF, ELSEIF, and ELSE to say: IF I have less than $100, pay me $1000, ELSEIF I have more than $200, move $100 into savings, ELSE move $50 to savings.
<br>Now I stop using money as examples. I have the same code 4 times, with only slight variations. It's made to say what menu item someone clicked on. First, I use IF, ELSEIFs, and ELSE to do it. Then I experiment with SWITCH. I test it with brackets, without a BREAK command, and with an ENDSWITCH insted of brackets.
<br>My last two examples are the same, just coded differently. It's an abbrviated version of an IF ELSE that can be kinda hard to understand. It says to fill the tank if there's less than 3 gallons.
<br>See what it evaluates to over there 👉!
_END;


function zeroA($fuel)
{
	global $design;
	$design['RIGHT'] .= "$fuel gallons left; ";
	$design['RIGHT'] .= ($fuel <= 2) ? "fill tank now" : "there's enough fuel";
	$design['RIGHT'] .= "<br>";
}


function zeroB($fuel)
{
	global $design;
	$design['RIGHT'] .= "$fuel gallons left; ";
	$enough           = $fuel <= 2 ? "Fill tank now" : "There's enough fuel";
	$design['RIGHT'] .= $enough;
	$design['RIGHT'] .= "<br>";
}


function one($bank_balance)
{
	global $design;
	$design['RIGHT'] .= "Bank balance: $$bank_balance";
	if ($bank_balance < 100) {
		$design['RIGHT'] .= " --> ";
		$money            = 1000;
		$bank_balance    += $money;
		$design['RIGHT'] .= "$$bank_balance";
	}

	$design['RIGHT'] .= "<br>";
}


function two($bank_balance)
{
	$savings = 56;
	global $design;
	$design['RIGHT'] .= "$$bank_balance	|	$$savings
changes to:
";
	if ($bank_balance < 100) {
		$money         = 1000;
		$bank_balance += $money;
	} else {
		$savings      += 50;
		$bank_balance -= 50;
	}

	$design['RIGHT'] .= "$$bank_balance	|	$$savings
";
}


function three($bank_balance)
{
	$savings = 56;
	global $design;
	$design['RIGHT'] .= "$$bank_balance	|	$$savings
changes to:
";
	if ($bank_balance < 100) {
		$money         = 1000;
		$bank_balance += $money;
	} else if ($bank_balance > 200) {
		$savings      += 100;
		$bank_balance -= 100;
	} else {
		$savings      += 50;
		$bank_balance -= 50;
	}

	$design['RIGHT'] .= "$$bank_balance	|	$$savings
";
}


function sixA($page)
{
	global $design;
	$design['RIGHT'] .= "$page
";
	if ($page == "Home") {
		$design['RIGHT'] .= "You selected Home";
	} else if ($page == "About") {
		$design['RIGHT'] .= "You selected About";
	} else if ($page == "News") {
		$design['RIGHT'] .= "You selected News";
	} else if ($page == "Login") {
		$design['RIGHT'] .= "You selected Login";
	} else if ($page == "Links") {
		$design['RIGHT'] .= "You selected Links";
	} else {
		$design['RIGHT'] .= "Unrecongnized section";
	}

	$design['RIGHT'] .= "<br>";
}


function sixB($page)
{
	global $design;
	$design['RIGHT'] .= "$page
";
	switch ($page) {
		case "Home":
			$design['RIGHT'] .= "You selected Home";
			break;
		case "About":
			$design['RIGHT'] .= "You selected About";
			break;
		case "News":
			$design['RIGHT'] .= "You selected News";
			break;
		case "Login":
			$design['RIGHT'] .= "You selected Login";
			break;
		case "Links":
			$design['RIGHT'] .= "You selected Links";
			break;
		default:
			$design['RIGHT'] .= "Unrecongnized section";
			break;
	}

	$design['RIGHT'] .= "<br>";
}


function sixC($page)
{
	global $design;
	$design['RIGHT'] .= "$page
";
	switch ($page) {
		case "Home":
			$design['RIGHT'] .= "You selected Home";
		case "About":
			$design['RIGHT'] .= "You selected About";
		case "News":
			$design['RIGHT'] .= "You selected News";
		case "Login":
			$design['RIGHT'] .= "You selected Login";
		case "Links":
			$design['RIGHT'] .= "You selected Links";
		default:
			$design['RIGHT'] .= "Unrecongnized section";
	}

	$design['RIGHT'] .= "<br>";
}


function sixD($page)
{
	global $design;
	$design['RIGHT'] .= "$page
";
	switch ($page):
		case "Home":
			$design['RIGHT'] .= "You selected Home";
			break;
		case "About":
			$design['RIGHT'] .= "You selected About";
			break;
		case "News":
			$design['RIGHT'] .= "You selected News";
			break;
		case "Login":
			$design['RIGHT'] .= "You selected Login";
			break;
		case "Links":
			$design['RIGHT'] .= "You selected Links";
			break;
		default:
			$design['RIGHT'] .= "Unrecongnized section";
			break;
	endswitch;
	$design['RIGHT'] .= "<br>";
}


$design['RIGHT'] = '<pre class="code">';
global $design;
$design['RIGHT'] .= "<h1>If</h1>
";
one(50);
one(100);
one(150);
$design['RIGHT'] .= "<hr>";

$design['RIGHT'] .= "<h1>If & Else</h1>
Bank balance	|	Savings
";
two(50);
two(100);
two(150);
$design['RIGHT'] .= "<hr>";

$design['RIGHT'] .= "<h1>If, else if, & Else</h1>
Bank balance	|	Savings
";
three(50);
three(100);
three(150);
three(200);
three(250);
$design['RIGHT'] .= "<hr>";

$design['RIGHT'] .= "<h1>If, else if, else if, else if, else if, & Else</h1>
";
sixA("Home");
sixA("About");
sixA("News");
sixA("Login");
sixA("Links");
sixA("PHP");
$design['RIGHT'] .= "<br>";

$design['RIGHT'] .= "<h1>Switch (with {})</h1>
";
sixB("Home");
sixB("About");
sixB("News");
sixB("Login");
sixB("Links");
sixB("PHP");
$design['RIGHT'] .= "<br>";

$design['RIGHT'] .= "<h1>Switch (without break)</h1>
";
sixC("Home");
sixC("About");
sixC("News");
sixC("Login");
sixC("Links");
sixC("PHP");
$design['RIGHT'] .= "<br>";

$design['RIGHT'] .= "<h1>Switch (with endswitch)</h1>
";
sixD("Home");
sixD("About");
sixD("News");
sixD("Login");
sixD("Links");
sixD("PHP");
$design['RIGHT'] .= "<hr>";

$design['RIGHT'] .= "<h1>Printing compressed if/elses directly</h1>
";
zeroA(0);
zeroA(2);
zeroA(20);
$design['RIGHT'] .= "<br>";

$design['RIGHT'] .= "<h1>Setting a variable to compressed if/elses directly and printing it, indirectly</h1>
";
zeroB(0);
zeroB(2);
zeroB(20);
$design['RIGHT'] .= "</pre>";
require_once "../twoColumnDesign.php";
