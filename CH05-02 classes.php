<?php
$design['title']       = 'LPMJ Book - Classes';
$design['description'] = 'Activity on classes from the book Learning PHP, MySQL & JavaScript with jQuery, CSS & HTML5 by Robin Nixon';
$design['keywords']    = "joe, classes, alice, amy, user, subscriber, param, secret, password, fred, luke, father, son, dad, tiger, wildcat, TRUE, stripes, fur, book, learning php mysql javascript with jquery css html5, robin nixon, activities, learning, php, mysql, javascript, jquery, css, html, html5, robin, nixon, O'Reilly, LPMJ";
$design['LEFT']        = <<<_END
<a href='https://paul-s-reid.com/web-dev/LPMJ%20Book-php'><h1>LPMJ Book</h1>
<h2>by Robin Nixon</h2></a>
Here is some code from the book <i>Learning <span class='php'>PHP</span>, <span class='mysql'>MySQL</span> & <span class='js'>JavaScript</span> with <span class='jquery'>jQuery</span>, <span class='css'>CSS</span> & <span class='html'>HTML<span class='notBold'>5</span></span> </i> by Robin Nixon.
<br>To be honest, I really don't see the point of classes, and they're pretty confusiong for me. But I got the basics down.
<br>I made an object, set its variables and ran some code in it.
<br>I cloned an object.
<br>I copied an object.
<br>I made an object with parameters.
<br>I got the value of an object's variable.
<br>I called a object's 


function.
<br>I made a child class.
<br>I experimented with the differences betwen parent and child classes. 
<br>See what it evaluates to over there 👉!
_END;
$design['RIGHT']       = '<pre class="code">';
class user {

	public $name, $password;


	public function save_user()
	{
		global $design;
		$design['RIGHT'] .= "Save user code goes here";
	}


}
class subscriber extends user {

	public $phone, $email;
}
class user1 {

	public $name;
}
class user2 {

	public $name;
}
class user3 {

	public $password;


	public function pass()
	{
		global $design;
		$design['RIGHT'] .= $this->password;
	}


}
class user4 {


	public static function pwd()
	{
		global $design;
		$design['RIGHT'] .= "Please enter your password";
	}


}

class Dad {


	public function test()
	{
		global $design;
		$design['RIGHT'] .= "[Class Dad] I am your father
";
	}


}
class Son extends Dad {


	public function test()
	{
		global $design;
		$design['RIGHT'] .= "[Class Son] I am Luke
";
	}


	public function test2()
	{
		parent::test();
	}


}

class constructor {


	public function __construct($param)
	{
		global $design;
		$design['RIGHT'] .= $param;
	}


}

class Wildcat {

	public $fur;


	public function __construct()
	{
		$this->fur = "TRUE";
	}


}
class Tiger extends Wildcat {

	public $stripes;


	public function __construct()
	{
		$this->stripes = "TRUE";
	}


}
class Wildcat2 {

	public $fur;


	public function __construct()
	{
		$this->fur = "TRUE";
	}


}
class Tiger2 extends Wildcat2 {

	public $stripes;


	public function __construct()
	{
		parent::__construct();
		$this->stripes = "TRUE";
	}


}

$object1 = new user();
print_r($object1, TRUE);
$design['RIGHT']  .= "<br>";
$object1->name     = "Joe";
$object1->password = "myPass";
print_r($object1, TRUE);
$design['RIGHT'] .= "<br>";
$object1->save_user();

$design['RIGHT'] .= "<hr>1: ";
$object1          = new user1();
print_r($object1, TRUE);
$design['RIGHT'] .= "
1: ";
$object1->name    = "Alice";
print_r($object1, TRUE);
$design['RIGHT'] .= "
1: ";
$object2          = $object1;
print_r($object1, TRUE);
$design['RIGHT'] .= "
2: ";
print_r($object2, TRUE);
$design['RIGHT'] .= "
1: ";
$object2->name    = "Amy";
print_r($object1, TRUE);
$design['RIGHT'] .= "
2: ";
print_r($object2, TRUE);

$design['RIGHT'] .= "<hr>1: ";
$object1          = new user2();
print_r($object1, TRUE);
$design['RIGHT'] .= "
1: ";
$object1->name    = "Alice";
print_r($object1, TRUE);
$design['RIGHT'] .= "
1: ";
$object2          = clone $object1;
print_r($object1);
$design['RIGHT'] .= "
2: ";
print_r($object2, TRUE);
$design['RIGHT'] .= "
1: ";
$object2->name    = "Amy";
print_r($object1, TRUE);
$design['RIGHT'] .= "
2: ";
print_r($object2, TRUE);

$design['RIGHT'] .= "<hr>";
$object1          = new constructor("param");

$design['RIGHT']  .= "<hr>";
$object1           = new user3("param");
$object1->password = "secret";
$design['RIGHT']  .= $object1->pass();
$design['RIGHT']  .= "<hr>";
user4::pwd();

$design['RIGHT'] .= "<hr>";
$object           = new subscriber();
$object->name     = "Fred";
$object->password = "myPass";
$object->phone    = "012 345 6789";
$object->email    = "fred@bloggs.com";
print_r($object, TRUE);

$design['RIGHT'] .= "<hr>";
$object           = new Son();
$object->test();
$object->test2();

$design['RIGHT'] .= "<hr>";
$object           = new Tiger();
print_r($object, TRUE);

$design['RIGHT'] .= "<hr>";
$object           = new Tiger2();
print_r($object, TRUE);

$design['RIGHT'] .= '</pre>';
require_once '../twoColumnDesign.php';
