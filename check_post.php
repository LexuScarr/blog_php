<?php
require_once "function/connect.php";
$name = filter_var(trim($_POST['username']));
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['password']));



// if (trim($name) == "" || strlen(trim($name)) <= 1) {
//     $error_name = "Неверное имя";
//     exit();
// } else if (trim($login) == "" || trim($pass) == "" || trim($_POST['name']) == "") {
//     $error = "введите данные";
//     exit();
// } else {
//     $pass = md5($pass);

//     $mysql = new mysqli('localhost', 'root', '', 'register_bd');
//     $mysql->query("INSERT INTO `users` (`login`, `name`, `pass`) VALUES('$login', '$name', '$pass')");

//     $mysql->close();

//     header('Location: login.php');
//     exit();
// }

$pass = md5($pass);

// $mysql = new mysqli('localhost', 'root', '', 'register_bd');
$pdo->query("INSERT INTO `users` (`login`, `name`, `pass`) VALUES('$login', '$name', '$pass')");

// $mysql->close();

header('Location: login.php');
exit();
