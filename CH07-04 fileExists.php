<?php
{
//headers
	$design['title']       = 'LPMJ Book - File exists?';
	$design['description'] = 'File existance activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "existance, file, exists, file_exists, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>It simply sees if the file "CH07-03 textFile.txt" exists or not.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
}

{
//content
	if (file_exists("CH07-03 textFile.txt")) {
		$design['RIGHT'] .= "<a href='CH07-03 textFile.txt'>CH07-03 textFile.txt exists.</a>";
	} else {
		$design['RIGHT'] .= "CH07-03 textFile.txt does not exist.";
	}

}

{
//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
