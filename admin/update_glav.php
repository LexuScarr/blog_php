<?php
require_once "../function/connect.php";

// Получаем значения из формы
$ids = $_POST["id"]; // Добавляем массив значений id
$filenames = $_POST["filename"];
$texts = $_POST["text"];
$publish_times = $_POST["publish_time"];

// Проверяем, что количество значений одинаково для всех полей
if (count($ids) === count($filenames) && count($filenames) === count($texts) && count($texts) === count($publish_times)) {
    // Создаем SQL запрос для обновления записи с использованием условия WHERE по ID
    $row = "UPDATE glav SET filename=:filename, text=:text, publish_time=:publish_time WHERE id=:id";

    // Подготавливаем запрос
    $query = $pdo->prepare($row);

    // Проходим по каждому значению в цикле
    for ($i = 0; $i < count($ids); $i++) {
        // Получаем значения для текущей итерации
        $id = $ids[$i]; // Используем значение id из массива
        $filename = $filenames[$i];
        $text = $texts[$i];
        $publish_time = $publish_times[$i];

        // Выполняем запрос, передавая значения через массив
        $query->execute(["filename" => $filename, "text" => $text, "publish_time" => $publish_time, "id" => $id]);
    }
}

// Выполняем редирект на страницу glav.php
echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/glav.php">';
