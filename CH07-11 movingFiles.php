<?php
{
	//headers
	$design['title']       = 'LPMJ Book - Moving files';
	$design['description'] = 'File management activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "file, moving, rename, move, renaming, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>It moves a file's contents to a new file and deletes the old. Basically, this is renaming a file, except the new file may be in a different directory.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$design['RIGHT'] .= rename('CH07-09 textFile.txt', 'CH07-12 textFile.txt') ? "<a href='CH07-12 textFile.txt'>File successfully moved/renamed to CH07-12 textFile.txt</a>" : "Could not rename file";
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
