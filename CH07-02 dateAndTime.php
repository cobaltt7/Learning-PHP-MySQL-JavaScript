<?php
$design['title']       = 'LPMJ Book - Date and Time';
$design['description'] = 'Date and time activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "date, unix, 1970, september, invalid, valid, time, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
	<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
	<h2>by Robin Nixon</h2></a>
	Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
	<br>First, I experiment with a  function called time(), which returns the amount of seconds from 1/1/1970. I can use math to find out the same thing for different dates relative to today. Or I can use the mktime(\$hour, \$minute, \$second, \$month, \$day, \$year) function to find it for a speciffic date. Then I used the date(\$format, [\$timestamp]) function to find the current dat, in one of the many, many, many availbe formats. Finally, I used checkdate(\$month, \$day, \$year) to see if a few dates are valid or not.
	<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">'; {
	//content
	$design['RIGHT'] .= time();
	$design['RIGHT'] .= " seconds have passed since the first second of 1/1/1970.<br>In exactly 7 days, ";
	$design['RIGHT'] .= time() + 7 * 24 * 60 * 60;
	$design['RIGHT'] .= " seconds will have passed since the first second of 1/1/1970.<br>In the first second of 1/1/2000, ";
	$design['RIGHT'] .= mktime(0, 0, 0, 1, 1, 2000);
	$design['RIGHT'] .= " seconds had passed since 1/1/1970.<hr>The date is ";
	$design['RIGHT'] .= date("l F jS, Y - g:ia");
	$design['RIGHT'] .= ".<hr>";
	$design['RIGHT'] .= goodDate(9, 31, 2022);
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= goodDate(9, 30, 2022);


	function goodDate($month, $day, $year)
	{
		$return = "$month/$day/$year (m/d/yyyy) is a ";
		if (!checkdate($month, $day, $year)) {
			$return .= "in";
		}

		$return .= "valid date.";
		return $return;
	}


} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
