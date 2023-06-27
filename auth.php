<?php
$title = "auth";
require_once "blocks/header.php";

// Проверка наличия параметра "error" в URL
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error === 'user_exists') {
        $errorMessage = 'Пользователь с таким логином уже существует.';
    }
}
?>

<main class="container d-flex justify-content-center">
    <form action="check_post.php" method="post" onsubmit="return validateForm()">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста, зарегистрируйтесь</h1>

        <?php if (isset($errorMessage)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php } ?>

        <div class="form-floating">
            <input type="login" name="login" class="form-control" id="loginInput" placeholder="login">
            <label for="loginInput">Введите логин</label>
            <span id="loginError" class="error"></span>
        </div>
        <div class="form-floating mt-4">
            <input type="username" name="username" class="form-control" id="usernameInput" placeholder="username">
            <label for="usernameInput">Ваш никнейм</label>
            <span id="usernameError" class="error"></span>
        </div>
        <div class="form-floating mt-4">
            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="password">
            <label for="passwordInput">Пароль</label>
            <span id="passwordError" class="error"></span>
        </div>
        <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Зарегистрироваться</button>
    </form>
</main>

<script>
    function validateForm() {
        var loginInput = document.getElementById('loginInput');
        var usernameInput = document.getElementById('usernameInput');
        var passwordInput = document.getElementById('passwordInput');
        var loginError = document.getElementById('loginError');
        var usernameError = document.getElementById('usernameError');
        var passwordError = document.getElementById('passwordError');
        var isValid = true;

        // Проверка поля "login"
        if (loginInput.value === '') {
            loginError.innerHTML = 'Пожалуйста, введите логин.';
            isValid = false;
        } else {
            loginError.innerHTML = '';
        }

        // Проверка поля "username"
        if (usernameInput.value === '') {
            usernameError.innerHTML = 'Пожалуйста, введите никнейм.';
            isValid = false;
        } else {
            usernameError.innerHTML = '';
        }

        // Проверка поля "password"
        if (passwordInput.value === '') {
            passwordError.innerHTML = 'Пожалуйста, введите пароль.';
            isValid = false;
        } else {
            passwordError.innerHTML = '';
        }

        return isValid;
    }
</script>
<?php
require_once "blocks/footer.php"
?>
