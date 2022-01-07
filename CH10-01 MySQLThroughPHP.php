<?php
// tcd
{
	//headers
	$design['title']       = 'LPMJ Book - Accessing MySQL through PHP';
	$design['description'] = 'MySQL access activity activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "mysql, php, access, mysqli, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>Here I access MySQL through PHP. Before now I've just been using the command line and phpMyAdmin. I print out the "classic" table, which I have been using lately.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	require_once "../mysql.php";
	//content
	$result = $mysql->query("SELECT * FROM classics");
	if (!$result) {
		die("Fatal error in MySQL access");
	}

	$rows = $result->num_rows;
	for ($j = 0; $j < $rows; ++$j) {
		$result->data_seek($j);
		$design['RIGHT'] .= '<br><br>Author: ' . htmlspecialchars($result->fetch_assoc()['author']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>Title: ' . htmlspecialchars($result->fetch_assoc()['title']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>Category: ' . htmlspecialchars($result->fetch_assoc()['category']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>Year: ' . htmlspecialchars($result->fetch_assoc()['year']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>ISBN: ' . htmlspecialchars($result->fetch_assoc()['isbn']);
	}

	$result->close();

	echo "<hr><h1>Simplified Version</h1>";
	$result = $mysql->query("SELECT * FROM classics");
	if (!$result) {
		die("Fatal error in MySQL access");
	}

	$rows = $result->num_rows;
	for ($j = 0; $j < $rows; ++$j) {
		$result->data_seek($j);
		$design['RIGHT'] .= '<br><br>Author: ' . htmlspecialchars($result->fetch_assoc()['author']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>Title: ' . htmlspecialchars($result->fetch_assoc()['title']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>Category: ' . htmlspecialchars($result->fetch_assoc()['category']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>Year: ' . htmlspecialchars($result->fetch_assoc()['year']);
		$result->data_seek($j);
		$design['RIGHT'] .= '<br>ISBN: ' . htmlspecialchars($result->fetch_assoc()['isbn']);
	}

	$result->close();
	$mysql->close();
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
