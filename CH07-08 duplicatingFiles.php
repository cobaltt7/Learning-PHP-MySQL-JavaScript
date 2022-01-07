<?php
{
	//headers
	$design['title']       = 'LPMJ Book - File Duplication';
	$design['description'] = 'File copying activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "files, copying, duplication, copy, dup, duplicate, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>This file copies the content of <a href='CH07-03 textFile.txt'>CH07-03 textFile.txt</a> to <a href='CH07-07 textFile.txt'>CH07-07 textFile.txt</a>.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	copy("CH07-03 textFile.txt", "CH07-07 textFile.txt") or $design['RIGHT'] .= "Failed to open file</pre><p style='display:none'>";
	$design['RIGHT']                                                         .= "<a href='CH07-07 textFile.txt'>File successfully copied to CH07-07 textFile.txt</a>";
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
