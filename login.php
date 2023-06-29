<?php
$title = "login";
require_once "blocks/header.php";
?>

<?php
if (!isset($_COOKIE['user']) || empty($_COOKIE['user'])) : // Если пользователь не авторизован, то выводим форму для авторизации
?>

    <main class="container d-flex justify-content-center">
        <form action="check_auth.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите</h1>

            <div class="form-floating">
                <input type="login" name="login" class="form-control" id="loginInput" placeholder="login">
                <label for="loginInput">Введите логин</label>
                <span id="loginError" class="error"></span>
            </div>
            <div class="form-floating mt-4">
                <input type="password" name="password" class="form-control" id="passwordInput" placeholder="password">
                <label for="passwordInput">Пароль</label>
                <span id="passwordError" class="error"></span>
            </div>
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Запомнить меня
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
        </form>
    <?php else : ?>
        <!-- Если пользователь авторизован -->
        <p>Привет <?= $_COOKIE['user'] ?> чтобы выйти нажмите <a href="exit.php">Здесь</a></p>
    <?php endif; ?>

    </main>

    <?php
    require_once "blocks/footer.php"
    ?>
