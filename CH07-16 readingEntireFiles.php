<?php
{
	//headers
	$design['title']       = 'LPMJ Book - Reading entire files';
	$design['description'] = 'File reading activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "read, reading, entire, file, files, whole, internet, fetch, oreiley, O, Reilly, O'Reilley, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>It first uses file_get_contents() to get the content of <a href='CH07-03 textFile.txt'>CH07-03 textFile.txt</a>. Then, it uses the same function to get the <a href='https://google.com'>Google homepage</a>.
		<br>See what it evaluates to over there 👉!
_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$design['RIGHT'] .= file_get_contents("CH07-03 textFile.txt");
	$design['RIGHT'] .= "<hr>";
	$design['RIGHT'] .= file_get_contents("https://google.com");
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
