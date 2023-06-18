<?php
$name = filter_var(trim($_POST['username']));
$login = filter_var(trim($_POST['email']));
$pass = filter_var(trim($_POST['password']));

$pass = md5($pass);

$mysql = new mysqli('localhost', 'root', '', 'register_bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
// $mysql->query("INSERT INTO `users` (`login`, `name`, `pass`) VALUES('$login', '$name', '$pass')");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "нету такого";
    exit();
} else {
    setcookie('user', $user['name'], time() + 3600, "/");

    $mysql->close();

    header('Location: /');
    // exit();
}
