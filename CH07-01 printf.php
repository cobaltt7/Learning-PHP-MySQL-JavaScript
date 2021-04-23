<?php
{
	//headers
	$design['title']       = 'LPMJ Book - printf';
	$design['description'] = 'printf activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "logic, octal, string, unsigned, lowercase, uppercase, hexadecimal, s, name, age, years, span, color, color code, code, division, rasmus, lerdorf, rasmus lerdorf, f, sprint, sprintf, echo, basket, percent, ASCII, signed, desimal, scientific, notation, scientific notation, floating point, floating, point, number, printf, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>First I practice usign printf with one argument. I give at leat one example of each possible conversion type with one argument. Then I do a few with multiple arguments and using variables instead of static text for the arguments. Then, I experiment with the many types of number and string padding printf offers.
		<br>See what it evaluates to over there 👉!
		<br>How I formatted it: text inside brackets ([]) was created using printf. The text next to it, inside parentheses (()) is the rules I told printf to follow.
		<br><small>Small note: I say I'm using printf, while in reality, I am using sprintf. The only difference between the two is that printf prints the result onto the page, while sprintf saves it in a variable. Because of the way I coded this site, I must use the latter.</small>
		<h3>How to use printf</h3>
		<h4>the logic of printf</h4>
		<ol><li>look for (%).</li>li>
		<li>look for (%) immediatley following previous. if present; print % and stop converting.</li>
		<li>look for [(b), (c), (d), (e), (f), (o), (s), (u), (x), or (X)] not following a '. set conversion type to that; if missing, throw error and stop converting.</li>
		<li>look for (-) immediatly after the %. if present, left justify; if missing, right justify.</li>
		<li>look for [(0) or (')] imedediatly following previous. if 0, pad with 0s; if ', pad with the next character; if missing, pad with spaces.</li>
		<li>look for [number (1), (2), (3), (4), (5), (6), (7), (8), (9)] imedediatly following previous. if present, pad to the length from that character to the next non 0-9 character.</li>
		<li>look for (.) imedediatly following previous. if present, cutoff to the length from the following character to the next non 0-9 character.</li>
		<li>look for [(b), (c), (d), (e), (f), (o), (s), (u), (x), or (X)] immediatley following previous; if missing, throw error. no matter what, then stop converting.</li></ol>
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$design['RIGHT'] .= sprintf("There are [%d](%%d) items in your basket", 3);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("There are [%b](%%b) items in your basket", 3);
	$design['RIGHT'] .= "<br><br>";
	$design['RIGHT'] .= sprintf("percent sign ([N/A]): [%%](%%%%)");
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("binary number (123): [%b](%%b)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("ASCII character (123): [%c](%%c)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Signed decimal (-123): [%d](%%d)", -123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Scientific notation (123): [%e](%%e)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Floating point number (123): [%f](%%f)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Octal (123): [%o](%%o)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("String (123): [%s](%%s)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Unsigned decimal (-123): [%u](%%u)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Lowercase hexadecimal (123): [%x](%%x)", 123);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= sprintf("Uppercase hexadecimal (123): [%X](%%X)", 123);
	$design['RIGHT'] .= "<br><br>";
	$design['RIGHT'] .= sprintf("My name is [%s](%%s). I'm [%d](%%d) years old, which is [%X](%%X) in hexadecimal.", 'Paul', 13, 13);
	$design['RIGHT'] .= "<br>";
	$r                = 65;
	$g                = 127;
	$b                = 245;
	$design['RIGHT'] .= sprintf("<span style='color:#%X%X%X'>Hello </span>", $r, $g, $b);
	$design['RIGHT'] .= sprintf("<span style='color:#%X%X%X'>World!</span>", $r - 20, $g - 20, $b - 20);
	$design['RIGHT'] .= " <small>* the color codes were created using printf decimal-to-hexa conversion. here are the color codes: ";
	$design['RIGHT'] .= sprintf("#[%X](%%X)[%X](%%X)[%X](%%X) ", $r, $g, $b);
	$design['RIGHT'] .= sprintf("and #[%X](%%X)[%X](%%X)[%X](%%X).", $r - 20, $g - 20, $b - 20);
	$design['RIGHT'] .= "</small><hr>";
	$design['RIGHT'] .= sprintf("$123.45 / 12 is $[%.2f](%%.2f).<br>", 123.42 / 12);
	$design['RIGHT'] .= sprintf("$123.45 / 12 is $[%15f](%%15f).<br>", 123.45 / 12);
	$design['RIGHT'] .= sprintf("$123.45 / 12 is $[%015f](%%015f).<br>", 123.45 / 12);
	$design['RIGHT'] .= sprintf("$123.45 / 12 is $[%15.2f](%%15.2f).<br>", 123.45 / 12);
	$design['RIGHT'] .= sprintf("$123.45 / 12 is $[%015.2f](%%015.2f).<br>", 123.45 / 12);
	$design['RIGHT'] .= sprintf("$123.45 / 12 is $[%'#15.2f](%%'#15.2f).", 123.45 / 12);
	$design['RIGHT'] .= "<br><br>";
	$design['RIGHT'] .= sprintf("[%s](%%s)<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%12s](%%12s)<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%-12s](%%-12s)<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%012s](%%012s)<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%'#12s](%%'#12s)<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%12.8s](%%12.8s])<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%-12.12s](%%-12.12s)<br>", "Rasmus Lerdorf");
	$design['RIGHT'] .= sprintf("[%-'@12.10s](%%-'@12.10s)", "Rasmus Lerdorf");
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
