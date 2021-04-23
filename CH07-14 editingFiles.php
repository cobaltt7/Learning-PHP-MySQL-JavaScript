<?php
{
	//headers
	$design['title']       = 'LPMJ Book - File pointers';
	$design['description'] = 'File management activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "fh, fopen, fgets, get, f, gets, open, seek, fseek, frwrite, fclose, r, r+, file, point, pointer, pointers, file pointer, file pointer, append, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>This code opens the file CH07-03 textFile.txt. It reads the first line fo the file, then appends it to the end. The purpose of this activity is to teach me about file pointers, or the location that will be written or read from.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$prevlen = strlen($design['RIGHT']);
	$file    = fopen("CH07-03 textFile.txt", 'r+') or die($design['RIGHT'] .= "Failed to open file</pre><p style='display:none'>");
	$text    = fgets($file);
	fseek($file, 0, SEEK_END);
	fwrite($file, $text) or die($design['RIGHT'] .= "Could not write to file.</pre><p style='display:none'>" . require_once '../twoColumnDesign.php');
	fclose($file);
	$design['RIGHT'] .= (strlen($design['RIGHT']) == $prevlen) ? "<a href='CH07-03 textFile.txt'>Wrote to file 'CH07-03 textFile.txt' successfully!</a>" : "";
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
