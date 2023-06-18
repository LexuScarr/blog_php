<?php
$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (trim($name) == "") {
    echo "Неверное имя";
} else if (strlen(trim($name)) <= 1)
    echo "Такого не может быть";
else if (trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "")
    echo "введите данные";
else {
    // $_POST['password'] = md5($pass);
    // echo "<h1> Все данные </h1>";
    // foreach ($_POST as $key => $value)
    //     echo "<p>$value</p>";
    header('Location: about.php');
    exit;
}
