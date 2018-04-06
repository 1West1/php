<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <!-- <a href="script.cgi"$value</a> -->

	 <form action="<?= $_SERVER['SCRIPT_NAME']; ?>" method="GET">
	 	<div>
			<label for="name">Text Input:</label>
			<input type="text" name="name" id="name" value="Jon" tabindex="1" />
			<input type="text" name="password" value=""> 
	 	</div>

	 	<div>
	 		<input type="submit" value="Submit" name='submit'/>
	 	</div>
	 	<input type="hidden" name="set[Perl]" value="0">
		<input type="checkbox" name="set[Perl]" value="1">
		<input type="hidden" name="set[PHP]" value='0'>
		<input type="checkbox" name="set[PHP]" value='1'>
	 </form>

</body>
</html>


<?php 


class MathComplex 
{
	public $re, $im;

	function add($re, $im) {
		$this->re += $re;
		$this->im += $im;
	}
}

$d = new MathComplex;

$d->re = 6;
$d->im = 10;

$d->add(12, 2);

echo $d->re;

echo "<br />";

class MathComplex1 
{
	public $re, $im;

	function add(MathComplex1 $y) 
	{
		$this->re += $y->re;
		$this->im += $y->im;
	}

	function __toString() 
	{
		return "({$this->re}, {$this->im})";
	}
}

$a = new MathComplex1;

$a->re = 314;
$a->im = 101;
echo $a;
echo "<br />";

$b = new MathComplex1;
$b->re = 303;
$b->im = 6;

$a->add($b);

echo $a->__toString();


echo "<br />";

class MathComplex2
{
	public $re, $im;

	function __construct($re = 0, $im = 0) 
	{
		$this->re = $re;
		$this->im = $im;
	}

	function add(MathComplex2 $y) 
	{
		$this->re += $y->re;
		$this->im += $y->im;
	}

	function __toString() 
	{
		return "({$this->re}, {$this->im})";
	}
}

$a = new MathComplex2;
$a = new MathComplex2();
$a = new MathComplex2(221);
$a = new MathComplex2(221, 59);

$a->add(new MathComplex2(32, 42));
echo $a;

class FileLogger0 
{
	public $f;
	public $name;
	public $lines = [];

	public function __construct($name, $fname) 
	{
		$this->name = $name;
		$this->f = fopen($fname, "a+");
	}

}


class Father 
{
	public $children = [];

	function __destruct() {
		echo "Отец умер <br />";
	}
}

/*class Child 
{
	public $father;

	function __construct(Father $father) {
		$this->father = $father;
	}

	function __destruct() {
		echo "Child died <br />";
	}
}

$father = new Father;
$child = new Child($father);

// $father->children[] = $child;
echo "Пока все живы";
$father = $child = null;*/


/*class MyDestructableClass {
   function __construct() {
       print "Конструктор\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "Уничтожается " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
echo "<br />";*/

class Hotel 
{
	private $exit;

	public function escape() {
		$this->findWayOut();
		echo "lets go {$this->exit}";
	}

	public function lock() {
		$this->exit = null;
	}

	private function findWayOut() {
		$this->exit = "main red";
	}
}

$a = new Hotel;
// $a->findWayOut();
$a->escape();

echo "<br />";

class Counter 
{
	private static $count = 0;

	public function __construct() {
		self::$count++;
	}
	public function __destruct() {
		self::$count--;
	}
	public static function getCount() {
		return self::$count;
	}
}

for ($objs = [], $i = 0; $i < 6; $i++) {
	$objs[] = new Counter();
}

echo "-- {$objs[0]->getCount()}";
$objs[5] = null;

echo "<br />";
echo "++ {$objs[0]->getCount()}";
$objs = [];
echo Counter::getCount();
echo "<br />";

class cls 
{
	const NAME = "cls";

	public function method() {
		// echo $this->NAME; ошибка
		echo self::NAME;
		echo "<br />";
		echo cls::NAME;
		echo "<br />";
	}
}

echo cls::NAME;
echo cls::method();

echo defined('cls::NAME');
echo "<br />";

class Hooker 
{
	public $arr = [15];

	public function __get($name) {
		echo $this->arr[$name] . "blue";
	}

	public function __set($name, $val) {
		echo $this->arr[$name] . "red" . $val . $name;
	}

	public function __call($name, $array) {
		echo $name . $array[0];
	}
}


$hook = new Hooker();
$hook->method;
$hook->method();

$hook->method = 43;
echo "<br />";

class Human 
{
	private static $i = 12;

	public $dns;
	public $text;

	public function __construct() {
		$this->dns = self::$i++;
		$this->text = "God";
	}
	
	public function __clone() {
		$this->dns = $this->dns . "clone";
	}
}

$neo = new Human();
$virtual = clone $neo;

echo "Neo {$neo->dns}, {$neo->text}";
echo "<br />";
echo "Virtual {$virtual->dns}, {$virtual->text}";
echo "<br />";

class cls1 
{
	public $var;
	public function __construct($var) {
		$this->var = $var;
	}
}

$obj = new cls1(100);

print_r($obj);
echo "<br />";

class user 
{
	public $name;
	public $password;
	public $referrer;
	public $time;

	public function __construct($name, $password){
		$this->name = $name;
		$this->password = $password;
		$this->referrer = $_SERVER['PHP_SELF'];
		$this->time = time();
	}

	public function __sleep() {
		return ['name', 'referrer', 'time'];
	}

	public function __wakeup() {
		$this->time = time();
	} 
}

$obj = new user('nick', 1234);
echo "<pre>";
print_r($obj);
echo "</pre>";

$object = 'O:4:"user":3:{s:4:"name";s:4:"nick";s:8:"referrer";s:10:"/index.php";s:4:"time";i:1520528833;}';
$obj = unserialize($object);


print_r($obj);

class Base 
{
	public static function title() {
		echo __CLASS__;
	}
	public static function test() {
		self::title();
	}
}

class Child extends Base 
{
	public static function title() {
		echo __CLASS__;
	}
}
echo "<br />";

echo Child::test();



echo "<br />";

class Dumper 
{
	public static function print($obj) {
		print_r($obj);
	}
}

Dumper::print( new class {
	public $title;
	public function __construct() {
		$this->title = "Hello world!";
	}	
});



/* ____________________ */

