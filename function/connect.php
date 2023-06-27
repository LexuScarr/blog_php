<?php
$user = "root"; // Имя пользователя базы данных
$password = ""; // Пароль для подключения к базе данных
$host = "localhost"; // Хост базы данных
$db = "register_bd"; // Имя базы данных
$dbh = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8'; // Строка подключения к базе данных
$pdo = new PDO($dbh, $user, $password); // Создание объекта PDO для установки соединения с базой данных

try {
    $pdo = new PDO($dbh, $user, $password); // Попытка установить соединение с базой данных
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Установка атрибута ERRMODE_EXCEPTION для обработки ошибок
} catch (PDOException $e) {
    die("Ошибка подключения к базе данных: " . $e->getMessage()); // В случае ошибки выводим сообщение и прекращаем выполнение скрипта
}
