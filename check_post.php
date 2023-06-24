<?php
require_once "function/connect.php";
$name = filter_var(trim($_POST['username']));
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['password']));

$pass = md5($pass);

// $pdo->query("INSERT INTO `users` (`login`, `name`, `pass`) VALUES('$login', '$name', '$pass')");

$stmt = $pdo->prepare("SELECT COUNT(*) FROM `users` WHERE `login` = :login");
$stmt->execute(array('login' => $login));
$count = $stmt->fetchColumn();

if ($count > 0) {
    // Пользователь с таким логином уже существует, перенаправляем обратно на страницу регистрации с ошибкой
    header('Location: auth.php?error=user_exists');
    exit();
}

// Добавление нового пользователя
$stmt = $pdo->prepare("INSERT INTO `users` (`login`, `name`, `pass`) VALUES(:login, :name, :pass)");
$stmt->execute(array('login' => $login, 'name' => $name, 'pass' => $pass));

// Пользователь успешно добавлен, перенаправляем на другую страницу
header('Location: login.php');
exit();
// header('Location: login.php');
// exit();
