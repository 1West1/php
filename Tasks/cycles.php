<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<!-- 2 задача -->
<!-- <form action="" method="post">
	<div>
		<label for="name">Введите корректно число: </label>
		<input type="text" name="number" id="number" value="" tabindex="1" />
	</div>

	<div>
		<input type="submit" name="submit" value="Submit" />
	</div>
</form> -->

<!-- 4 Задача -->
<!-- 	<form action="#" method="post">
		<div>
			<label for="name">Число a:</label>
			<input type="text" name="a" id="name" value="" tabindex="1" />
			<label for="name">Число b:</label>
			<input type="text" name="b" id="name" value="" tabindex="1" />
		</div>
	
		<div>
			<input type="submit" name="btn" value="Submit" />
		</div>
	</form> -->

</body>
</html>


<?php 

// 1. Выведите  10 раз фразу "You are welcome!"


for($i = 0; $i < 10; $i++) {
	echo "You are welcome!". "<br />";
}

// 2. Выведите на экран n раз фразу "Silence is golden". Число n вводит пользователь на форме. Если n некорректно, вывести фразу "Bad n".

// $number = $_POST['number'];
// $submit = $_POST['submit'];

if(isset($submit)) {

$n = intval($number);
	if ($n) {
		for ($i=0; $i < $number; $i++) { 
			echo "Silence is golden" . "<br />";
		}
	} else {
		echo "Введите число, а не $number";
	}
}
unset($n);

echo "<br />";

// 3. Найти сумму  1+4+7+10+...+112. Ответ: 2147


$n = 0;

for ($i = 1; $i <= 112; $i += 3) { 
	$n += $i;
}

echo $n;
unset($n);

echo "<br />";


// 4. Найти сумму натуральных чисел от a до b, где a и b вводит пользователь. В случае некорректных a и b (например, a>b) вывести сообщение 'Сумма не существует'.

// $a = intval($_REQUEST["a"]);
// $b = intval($_REQUEST["b"]);
// $btn = $_REQUEST["btn"];

$n = 0;

if (isset($btn)) {
	if ($a < $b) {
		for ($i = $a; $i <= $b; $i++) { 
			$n += $i;
		}
		echo $n;
	} else {
		echo "Сумма не существует или вы ввели не коректные данные";
	}
}


echo "<br />";

// 5. Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5

/*for ($i=0; $i < 10000; $i++) { 
	if ((strpbrk($i, 3)) && ($i % 5 !== 0)) {
		echo $i . "<br />";
	} 
}*/


// 6. Вывести 3 случайных числа от 0 до 100 без повторений

do {
	echo rand(0, 100) . "<br />";
	echo rand(0, 100) . "<br />";
	echo rand(0, 100) . "<br />";
} while (false);

// 7. Вывести на экран все шестизначные счастливые билеты. Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр. Найдите количество счастливых билетов и  процент от общего числа билетов.

$arr = [];

for ($i=100000; $i < 1000000; $i++) { 
	$x_0 = substr($i, 0, 1);
	$x_1 = substr($i, 1, 1);
	$x_2 = substr($i, 2, 1);
	$x_3 = substr($i, 3, 1);
	$x_4 = substr($i, 4, 1);
	$x_5 = substr($i, 5, 1);

	$sum_1 = $x_0 + $x_1 + $x_2;
	$sum_2 = $x_3 + $x_4 + $x_5;
	if($sum_1 == $sum_2) {
		$arr[] = $i;
	}

}
echo "<br />";

// Шестизначные счастливые билеты
/*foreach ($arr as $value) {
	echo $value . "<br />";
}*/

$happy_tickets = count($arr);
echo "Количество билетов счастливых: ". $happy_tickets;

echo "<br />";

$percent = (100 * $happy_tickets)/(1000000-100000);

echo "Процент от общега числа счастливых билеов: " . round($percent, 3) . " %";

echo "<br />";


