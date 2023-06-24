<?php
$title = "admin";
require_once "../blocks/header.php";
require_once "../function/connect.php";
?>
<div style="text-align: center;">
    <?php if (!empty($_COOKIE['user'] == 'admin1')) : ?>
        <?php echo "Добро пожаловать в админ панель, " . $_COOKIE['user']; ?>
        <br>
        <a href="/exit.php">выйти</a>.<br>
        <a href="/admin/glav.php">Главная</a>
    <?php else :
        echo '<h2>Ты не должен тут находится</h2>';
        echo '<a href="/">На главную</a>';
    ?>
    <?php endif ?>
</div>
<?php
require_once "../blocks/footer.php"
?>
