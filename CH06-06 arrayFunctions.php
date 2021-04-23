<?php
$design['title']       = 'LPMJ Book - Array functions';
$design['description'] = 'Array functions activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "Array, arrays, function, is, count, sort, rsort, shuffle, extract, compact, reset, end, explode, is array, functions, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
	<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
	<h2>by Robin Nixon</h2></a>
	Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
	<br>
	<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">'; {
	//content
	$greetings        = "hi";
	$design['RIGHT'] .= "\$greetings: $greetings<br>\$greetings is an array: ";
	$design['RIGHT'] .= is_array($greetings) ? "TRUE" : "FALSE";
	$greetings        = array('Hi', 'Hello', 'Hey');
	$design['RIGHT'] .= "<br>\$greetings: ";
	$design['RIGHT'] .= print_r($greetings, TRUE);
	$design['RIGHT'] .= "\$greetings is an array: ";
	$design['RIGHT'] .= is_array($greetings) ? "TRUE" : "FALSE";
	$design['RIGHT'] .= "<hr>\$greetings: ";
	$greetings        = array(
		'English' => array(
			'Hi', 'Hello', 'Hey'
		),
		'Spanish' => array(
			'Hola', 'Oye', 'Diga'
		),
		'French'  => array(
			'Salut', 'Bonjour', 'Hé'
		)
	);
	$design['RIGHT'] .= print_r($greetings, TRUE);
	$design['RIGHT'] .= "Count \$greetings top-level: " . count($greetings);
	$design['RIGHT'] .= "<br>Count \$greetings all-levels: " . count($greetings, 1);
	$design['RIGHT'] .= "<hr>Sort \$greetings: ";
	sort($greetings);
	$design['RIGHT'] .= print_r($greetings, TRUE);
	$design['RIGHT'] .= "<br>Reverse sort \$greetings: ";
	rsort($greetings);
	$design['RIGHT'] .= print_r($greetings, TRUE);
	$design['RIGHT'] .= "<hr>Randomize \$greetings: ";
	shuffle($greetings);
	$design['RIGHT'] .= print_r($greetings, TRUE);
	$design['RIGHT'] .= "<hr>";

	$sentence         = "This is a sentence with seven words.";
	$design['RIGHT'] .= $sentence;
	$design['RIGHT'] .= "<br>";
	$sentence         = explode(' ', $sentence);
	$design['RIGHT'] .= print_r($sentence, TRUE);
	$design['RIGHT'] .= "<br>";
	$sentence         = "A***sentence***with***asterisks***instead***of***spaces.";
	$design['RIGHT'] .= $sentence;
	$design['RIGHT'] .= "<br>";
	$sentence         = explode('***', $sentence);
	$design['RIGHT'] .= print_r($sentence, TRUE);
	$design['RIGHT'] .= "<hr>";

	$address1         = "5 Main Street";
	$address2         = "Apartment 113";
	$city             = "George";
	$state            = "Washington";
	$country          = "USA";
	$design['RIGHT'] .= "\$address1: $address1<br>\$address2: $address2<br>\$city: $city<br>\$state: $state<br>\$country: $country<br><br>\$address: ";
	$address          = compact('address1', 'address2', 'city', 'state', 'country');
	$design['RIGHT'] .= print_r($address, TRUE);
	$design['RIGHT'] .= "<br><br>";
	extract($address, EXTR_PREFIX_ALL, "address");
	$design['RIGHT'] .= "\$address_address1: $address_address1<br>\$address_address2: $address_address2<br>\$address_city: $address_city<br>\$address_state: $address_state<br>\$address_country: $address_country<hr>First item in \$address: " . reset($address);
	$design['RIGHT'] .= "<br>Last item in \$address: " . end($address);
} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
