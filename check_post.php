<?php
require_once "function/connect.php"; // Подключение файла connect.php
$name = filter_var(trim($_POST['username'])); // Получение значения поля "username" из POST-запроса и удаление лишних пробелов
$login = filter_var(trim($_POST['login'])); // Получение значения поля "login" из POST-запроса и удаление лишних пробелов
$pass = filter_var(trim($_POST['password'])); // Получение значения поля "password" из POST-запроса и удаление лишних пробелов

$pass = md5($pass); // Хеширование пароля с использованием MD5

$stmt = $pdo->prepare("SELECT COUNT(*) FROM `users` WHERE `login` = :login"); // Подготовленный запрос для подсчета количества пользователей с указанным логином
$stmt->execute(array('login' => $login)); // Выполнение запроса, передача значения логина
$count = $stmt->fetchColumn(); // Получение результата запроса в виде количества строк

if ($count > 0) {
    // Пользователь с таким логином уже существует, перенаправляем обратно на страницу регистрации с ошибкой
    header('Location: auth.php?error=user_exists');
    exit();
}

// Добавление нового пользователя
$stmt = $pdo->prepare("INSERT INTO `users` (`login`, `name`, `pass`) VALUES(:login, :name, :pass)"); // Подготовленный запрос для добавления нового пользователя
$stmt->execute(array('login' => $login, 'name' => $name, 'pass' => $pass)); // Выполнение запроса, передача значений логина, имени и хешированного пароля

// Пользователь успешно добавлен, перенаправляем на другую страницу
header('Location: login.php');
exit();
