<?php
{
	//headers
	$design['title']       = 'LPMJ Book - Delting files';
	$design['description'] = 'File management activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "file, deleting, unlink, delete, unlinking, linking, un, link, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>It deletes all of the files dynamically created so far, one by one: <a href="CH07-03 textFile.txt">CH07-03 textFile.txt</a>, <a href="CH07-07 textFile.txt">CH07-07 textFile.txt</a>, <a href="CH07-09 textFile.txt">CH07-09 textFile.txt</a>, and <a href="CH07-12 textFile.txt">CH07-12 textFile.txt</a>.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$design['RIGHT'] .= unlink('CH07-03 textFile.txt') ? "CH07-03 textFile.txt successfully deleted" : "Could not delete CH07-03 textFile.txt";
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= unlink('CH07-07 textFile.txt') ? "CH07-07 textFile.txt successfully deleted" : "Could not delete CH07-07 textFile.txt";
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= unlink('CH07-09 textFile.txt') ? "CH07-09 textFile.txt successfully deleted" : "Could not delete CH07-09 textFile.txt";
	$design['RIGHT'] .= "<br>";
	$design['RIGHT'] .= unlink('CH07-12 textFile.txt') ? "CH07-12 textFile.txt successfully deleted" : "Could not delete CH07-12 textFile.txt";
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
