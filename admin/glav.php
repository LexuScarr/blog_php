<?php
$title = "glav";
require_once "../blocks/header.php";
require_once "../function/connect.php";
?>
<div style="text-align: center;">
    <?php if (!empty($_COOKIE['user'] == 'admin1')) : ?>
        <h1>Редактирование главной страницы</h1>
        <?php echo "Добро пожаловать в админ панель, " . $_COOKIE['user']; ?>
        <br>
        <a href="/exit.php">выйти</a>
        <br>
        <a href="/admin/glav.php">Главная</a>
        <br>

        <?php
        $glav_redakt = $pdo->prepare("SELECT * FROM glav ORDER BY publish_time ASC");
        $glav_redakt->execute();
        $res_glav = $glav_redakt->fetchAll(PDO::FETCH_OBJ);
        ?>

        <form action="/admin/update_glav.php" method="post">
            <?php foreach ($res_glav as $item) : ?>
                <input type="text" name="id[]" value="<?php echo $item->id ?>" readonly>
                <input type="text" name="filename[]" value="<?php echo $item->filename ?>">
                <input type="text" name="text[]" value="<?php echo $item->text ?>">
                <input type="text" name="publish_time[]" value="<?php echo $item->publish_time ?>">
                <br>
            <?php endforeach; ?>
            <input type="submit" value="Save">
        </form>


    <?php else :
        echo '<h2>Ты не должен тут находится</h2>';
        echo '<a href="/">На главную</a>';
    ?>
    <?php endif ?>
</div>
<?php
require_once "../blocks/footer.php"
?>
