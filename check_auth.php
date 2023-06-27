<?php
require_once "function/connect.php";
$name = filter_var(trim($_POST['username']));
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['password']));

$pass = md5($pass); // Хеширование пароля с использованием MD5

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `login` = :login AND `pass` = :pass"); // Подготовленный запрос для выборки пользователей с указанным логином и паролем
$stmt->execute(array('login' => $login, 'pass' => $pass)); // Выполнение запроса, передача значений логина и хешированного пароля
$user = $stmt->fetch(PDO::FETCH_ASSOC); // Получение результата запроса в виде ассоциативного массива

if (count($user) == 0) {
    echo "нету такого"; // Если пользователь с указанным логином и паролем не найден, выводится сообщение "нету такого"
    exit();
} else {
    setcookie('user', $user['name'], time() + 3600, "/"); // Установка куки с именем пользователя на 1 час

    header('Location: /'); // Перенаправление на главную страницу
}
