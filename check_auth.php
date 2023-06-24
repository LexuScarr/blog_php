<?php
require_once "function/connect.php";
$name = filter_var(trim($_POST['username']));
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['password']));

$pass = md5($pass);

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `login` = :login AND `pass` = :pass");
$stmt->execute(array('login' => $login, 'pass' => $pass));
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($user);

// $user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "нету такого";
    exit();
} else {
    setcookie('user', $user['name'], time() + 3600, "/");

    // $mysql->close();

    header('Location: /');
    // exit();
}
