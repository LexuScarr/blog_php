<?php
$title = "login";
require_once "blocks/header.php";

?>
<main class="container mt-4">
    <form>
        <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Адрес эл. почты</label>
        </div>

        <div class="form-floating mt-4">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль">
            <label for="floatingPassword">Пароль</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Запомнить меня
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
    </form>
</main>

<?php
require_once "blocks/footer.php"
?>
