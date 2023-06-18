<?php
$title = "glav";
require_once "blocks/header.php";
?>
<h1>GLAV</h1>
<div class="container mt-2">
    <h3>тест опрос</h3>
    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="введите Имя" class="form-control"><br>
        <input type="email" name="email" placeholder="введите email" class="form-control"><br>
        <input type="password" name="password" placeholder="введите pass" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="введите сообщение"></textarea>
        <!-- <button type="submit" value="отправить" class="btn btn-succes"></button><br> -->
        <input type="submit" value="отправить" class="btn btn-succes">
    </form>
</div>

<?php

// $list1 = ["age" => 18, "name" => 'Aleksey'];
// $list2 = [5, 6, 7, 1, 2, 3, 4, 1.2];
// echo $list1["name"] . '<br>';

// function info($list)
// {
//     foreach ($list as $item => $value) {
//         echo "key: $item. Value: $value.<br>";
//     }
// }

// info($list2);


?>

<?php
require_once "blocks/footer.php"
?>
