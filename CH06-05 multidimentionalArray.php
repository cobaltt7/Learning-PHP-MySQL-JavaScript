<?php
$design['title']       = "LPMJ Book - Foreach...As";
$design['description'] = "Assosiative activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon";
$design['keywords']    = 'multi, dimensional, 2d, 3d, muiltidimensional, multidimensional arrays, writers, ink, pen, marker, paper, tape, loop, for, each, as, foreach, foreach as, numeric, associative, array, copier, scanner, printer, printers, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O\'Reilly, LPMJ';
$design['LEFT']        = <<<_END
<a href="https://paul-s-reid.com/web-dev/LPMJ%20Book-php"><h1>LPMJ Book</h1>
<h2>Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class="php">PHP</span>, <span class="mysql">MySQL</span> & <span class="js">JavaScript</span> with <span class="jquery">jQuery</span>, <span class="css">CSS</span> & <span class="html">HTML<span class="notBold">5</span></span> </i> by Robin Nixon.
<br>The aim of the code is to teach me about multi dimensional arrays.
<br>I made two arrays, one associative and one numeric, both with two dimensions as opposed to the usual one. First, I used PHP's built-in function to print the first one out. Then, I used two nested FOREACH...AS loops to print them all out. I also retured a single item from each array.
<br>See what it evaluates to over there 👉 !
_END;
$design['RIGHT']       = '<pre class="code">'; {
	//content
	$products         = array(
		'Printers' => array(
			"Multi" => "Multipurpose Printer",
			"Ink"   => "Inkjet Printer",
			"Laser" => "Laserjet Printer",
			"Photo" => "Photographic Printer"
		),
		'Writers'  => array(
			'Pen'       => "Ballpoint Pen",
			'Highlight' => "Yellow Highlighter",
			'Marker'    => "Permanent Marker",
			'Pencil'    => '#2 Black Pencil'
		),
		'Other'    => array(
			'Tape'   => 'Invisible Tape',
			'Glue'   => 'Hot Glue Gun',
			'Staple' => 'Stapler',
			'Clips'  => 'Paperclips'
		)
	);
	$design['RIGHT'] .= print_r($products, TRUE);
	$design['RIGHT'] .= "<br><br><br>";
	foreach ($products as $section => $items) {
		$design['RIGHT'] .= "$section:<br>";
		foreach ($items as $abbreviation => $item) {
			$design['RIGHT'] .= "\t$item\t($abbreviation)<br>";
		}

		$design['RIGHT'] .= "<br>";
	}

	$design['RIGHT'] .= "<br><br>";
	$design['RIGHT'] .= $products['Other']['Glue'];
	$design['RIGHT'] .= "<hr>";
	$chessboard       = array(
		array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
		array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
		array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
		array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
		array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
	);
	foreach ($chessboard as $row) {
		foreach ($row as $piece) {
			$design['RIGHT'] .= "$piece ";
		}

		$design['RIGHT'] .= "<br>";
	}

	$design['RIGHT'] .= "<br><br>";
	$design['RIGHT'] .= $chessboard[7][3];
} {
	//other
	$design['RIGHT'] .= "</pre>";
	require_once "../twoColumnDesign.php";
}
