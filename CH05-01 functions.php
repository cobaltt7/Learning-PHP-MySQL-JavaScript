<?php
$design['title']       = 'LPMJ Book - 


functions';
$design['description'] = '


functions activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "


functions, mouse, over, built-in, hello, world, hip, hooray, upper, lower, case, lowercase, uppercase, randomcase, random, convert, name, william, henry, gates, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
<h2>by Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
<br>With this code, I experimented with predifined 


functions, nested 


functions, and custom 


functions.
<br>See what it evaluates to over there 👉!
<br>Mouse over each word to see what 


function I used.
_END;
$design['RIGHT']       = '<pre class="code">';
$design['RIGHT']      .= "<h1>Some built-in functions</h1><span title='Reverse'>" . strrev(" .dlrow olleH") . " </span><span title='Duplicate'>" . str_repeat("Hip ", 2) . " </span><span title='Convert to uppercase'>" . strtoupper("hooray!") . " </span>
<span title='Convert to lowercase'>" . strtolower("THIS WAS UPPER BUT NOW IS LOWERCASE. ") . " </span><span title='Convert first letter to uppercase'>" . ucfirst("this was lowercase but now the first letter is upper. ") . " </span><span title='Nested: Convert first letter to uppercase/Convert string to lowercase'>" . ucfirst(strtolower("tHiS wAs CoMePleatLY RANdoM caSE bUT nOw JusT THe fIrSt leTTer is upPeR. ")) . "</span>
<h1>My own 


functions:</h1><span title='Mine: Fix names, return full name | via nested: Capatalize first letter/Convert to lowercase'>" . fixNames1("WILLIAM", "HEnry", "gates") . " </span>
<span title='Mine: Fix names, return array of names | via Nested: Capatalize first letter/Convert to lowercase'>" . fixNames2("WILLIAM", "HEnry", "gates")[0] . " " . fixNames2("WILLIAM", "HEnry", "gates")[1] . " " . fixNames2("WILLIAM", "HEnry", "gates")[2] . " </span></span>";


function fixNames1($n1, $n2, $n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return $n1 . " " . $n2 . " " . $n3;
}


function fixNames2($n1, $n2, $n3)
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	return array(
		$n1,
		$n2,
		$n3
	);
}


$design['RIGHT'] .= "<h1>With no 


functions</h1><i>Before the 


functions, there was:</i>
<span title='Reverse'> .dlrow olleH </span><span title='Duplicate'>Hip  </span><span title='Convert to uppercase'>hooray! </span>
<span title='Convert to lowercase'>THIS WAS UPPER BUT NOW IS LOWERCASE.  </span><span title='Convert first letter to uppercase'>this was lowercase but now the first letter is upper.  </span><span title='Nested: Convert first letter to uppercase/Convert string to lowercase'>tHiS wAs CoMePleatLY RANdoM caSE bUT nOw JusT THe fIrSt leTTer is upPeR. </span>

<span title='Mine: Fix names, return full name | via nested: Capatalize first letter/Convert to lowercase'>WILLIAMHEnrygates </span>
<span title='Mine: Fix names, return array of names | via Nested: Capatalize first letter/Convert to lowercase'>WILLIAM HEnry gates </span></span>";
$design['RIGHT'] .= '</pre>';
require_once '../twoColumnDesign.php';
