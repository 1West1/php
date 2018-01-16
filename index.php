<?php 
declare(strict_types = 1);
 ?>

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


echo "<br />";



$planets = ["Меркурий", "Венера", "Земля", "Марс"];
$y = 17;

function foo($planets, $x = 0) 
{
	foreach ($planets as $key => $value) {
		echo $key . " => " . $value . "<br />";
	}

	static $x;

	$x++;
	echo $x . "<br />";

}

foo($planets);
foo($planets);

function look() 
{
	echo func_num_args();
	$arr = func_get_args();

	for ($i=0; $i < func_num_args(); $i++) { 
		echo $arr[$i] ."<br />";
	}
	echo func_get_arg(1);

}

// look(...$planets);

function rex($n) 
{
	if($n == 1) return "stop";
	rex($n - 1);
	echo $n . "<br />";
}

call_user_func("look", 5, 8, 9);
echo "<br />";


function collect($arr, $callback) 
{
	foreach ($arr as $value) {
		if(!$callback($value)) yield $value;
	}
}

$arr = [1, 2, 3, 4];

$collect = collect($arr, function($e) 
{
	if($e % 2 == 0) {
		return true;
	} else {
		return false;
	}
});

$collect2 = collect($arr, function($e) {
	return $e * $e;
});

foreach ($collect as $value) {
	echo "<br />".  $value;
}

echo "<br />";

$str = "HELLO world";
echo "{$str[2]}<br />";
$str = "Привет";
echo "{$str[2]}<br />";

echo strlen($str);
echo mb_strlen($str);

echo "<br />";

$zero = 0;

if("$zero" == "") echo 4;
if($zero == "") echo 3;
echo gettype(strval($zero));
echo "<br />";


echo "<br />";

$str = 'Help me %s, you Привет %d';
$repl = ["Help" => "Give", "Give" => "Help"];

$d = str_replace(array_keys($repl), array_values($repl) ,$str);
$f = strtr($str, $repl);

echo $d. "<br />";
echo $f. "<br />";


$new = htmlspecialchars("<a href='test'>ссылка</a>");

$to = "dsf";
$form = 10;

echo sprintf($str, $to, $form);
echo "<br />";

echo "<pre>";
echo "<br />";

$arr = [
	"a" => "Zero",
	"b" => "Weapon",
	"c" => "Alpha",
	"d" => "Gnom"
];


$files = array("img12.png", "img2.png", "img10.png", "img1.png");

$n = [1, 2, 1, 2, 3, 4, 5];

$ex = array_unique($n);


echo "<br />";
print_r($ex);

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, "r" => "Привет");

$d = json_encode($arr, JSON_UNESCAPED_UNICODE);

$x = json_decode($d);

print_r($x);






echo "<br />";
/* ____________________ */

