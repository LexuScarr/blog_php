<?php
$title = "about";
require_once "blocks/header.php";
?>
<h1>ABOUT</h1>
<div class="container mt-2">
    <h3>тест опрос</h3>
    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="введите Имя" class="form-control"><br>
        <input type="email" name="email" placeholder="введите email" class="form-control"><br>
        <input type="password" name="password" placeholder="введите pass" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="введите сообщение"></textarea><br>
        <button type="submit" value="send" class="btn btn-succes">отправить</button><br>
        <!-- <input type="submit" value="отправить" class="btn btn-succes" class="btn btn-succes"> -->
    </form>
</div>
<?php
// function summary($arr)
// {
//     $summ = 0;
//     foreach ($arr as $value) {
//         $summ += $value;
//     }
//     return $summ;
// }

// $list2 = [5, 6, 7, 1, 2, 3, 4, 1.2];
// echo summary([4, 5, 3, 2, 1, 66]) . "<br>";
// echo summary($list2);
?>
<?php
require_once "blocks/footer.php"
?>
