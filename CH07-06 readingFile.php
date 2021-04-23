<?php
{
	//headers
	$design['title']       = 'LPMJ Book - Reading a file';
	$design['description'] = 'File reading activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "fopen, fgets, fread, fclose, open, read, close, f, file, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
	<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
	<h2>by Robin Nixon</h2></a>
	Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
	<br>It first looks for the file "CH07-03 textFile.txt". If it doesn't exist, an error mesage is displayed. Next it reads the first line of the file and prints it out. Then, it does the same for the next 30 characters.
	<br>See what it evaluates to over there 👉!
_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$file             = fopen("CH07-03 textFile.txt", 'r') or $design['RIGHT'] .= "Failed to open file</pre><p style='display:none'>";
	$line             = fgets($file);
	$design['RIGHT'] .= $line;
	$text             = fread($file, 30);
	$design['RIGHT'] .= $text;
	fclose($file);
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
