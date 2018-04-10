<?php

session_start();

//Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
$_SESSION["error_messages"] = '';

//Добавляем файл подключения к БД
require_once("../db/dbconnect.php");

$email = trim($_POST['email']);

// проверяем есть ли такой эмайл
$query = "SELECT `email` FROM `users` WHERE `email`='{$email}' LIMIT 1";

$sql = $mysqli->query($query) or die(mysql_error());
if (mysqli_num_rows($sql) == 1) {
  // если есть то генерируем пороль
  // Функция генерации пароля
  function generatePassword($length){
    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ23456789';
    $numChars = strlen($chars);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
      $string .= substr($chars, rand(1, $numChars) - 1, 1);
    }
    return md5($string);
  }
} else {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: ".$address_site."/index.php");
}

$pass = generatePassword(9);

// Запрос к базе данных
$result = $mysqli->query("UPDATE `users` SET `password` = '{$pass}' WHERE `email` = '$email'") or die(mysql_error());

if($result) {

  //получаем мыло из базы для нашего пользователя
  $query = "SELECT `email` FROM `users` WHERE `email`='{$email}' LIMIT 1";
      $sql = $mysqli->query($query) or die(mysql_error());

  $row = mysqli_fetch_assoc($sql);
  $mail = $row['email'];

  //шлём пороль на это мыло
  // mail($email, "Запрос на востонавление пороля", "Здравствуйте ваш новый пороль : $pass");
  echo "Отправлено";
  // Отправляем пользователя на главную страницу
  // header("HTTP/1.1 301 Moved Permanently");
  // header("Location: ".$address_site."/index.php");
} else {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: ".$address_site."/index.php");
}


?>
