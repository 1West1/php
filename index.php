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
/* ____________________ */

