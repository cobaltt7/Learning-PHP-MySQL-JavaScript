<?php
{
	//headers
	$design['title']       = 'LPMJ Book - Uploading files';
	$design['description'] = 'File management activity from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
	$design['keywords']    = "file, manage, management, files, security, removed, upload, uploading, uploader, free, file, host, image, hosting, free image, free hosting, image hosting, free image hosting hosting, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
	$design['LEFT']        = <<<_END
		<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
		<h2>by Robin Nixon</h2></a>
		Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
		<br>This file uplodes an image.
		<br>See what it evaluates to over there 👉!
	_END;
	$design['RIGHT']       = '<pre class="code">';
} {
	//content
	$design['RIGHT'] .= <<<_END
		<form method='post' action='CH07-17 uploadingFiles.php' enctype='multipart/form-data'>
			<label>Select an image file: <input type='file' name='filename'></label>
			<input type='submit' value='Upload'>
		</form>
	_END;
	if ($_FILES) {
		$name  = $_FILES['filename']['name'];
		$types = array(
			'image/jpeg',
			'image/jpg',
			'image/pjpeg',
			'image/gif',
			'image/png',
			'image/tif',
			'image/svg',
			'image/tiff'
		);
		if (in_array($_FILES['filename']['type'], $types)) {
			move_uploaded_file($_FILES['filename']['tmp_name'], "CH07-18 " . strtolower(preg_replace("[^A-Za-z0-9]", "", $name)) . ".png");
			$design['RIGHT'] .= "Uploaded image '$name'<br><img src='CH07-18 " . strtolower(preg_replace("[^A-Za-z0-9]", "", $name)) . ".png'>.";
		} else {
			$design['RIGHT'] .= "$name is not an accepted image type";
		}
	} else {
		$design['RIGHT'] .= "No image was uploaded";
	}

} {
	//other
	$design['RIGHT'] .= '</pre>';
	require_once '../twoColumnDesign.php';
}
