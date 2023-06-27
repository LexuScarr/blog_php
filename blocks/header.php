<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Подключение CSS Bootstrap с помощью CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <!-- Подключение JavaScript Bootstrap с помощью CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom text-center">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/index.php" class="nav-link px-2 link-secondary">Главная</a></li>
            <li><a href="/login.php" class="nav-link px-2">Функции</a></li>
            <li><a href="#" class="nav-link px-2">FAQ</a></li>
            <li><a href="/about.php" class="nav-link px-2">О нас</a></li>
            <?php if ($_COOKIE['user'] == 'admin1') : ?>
                <li><a href="/admin/admin.php" class="nav-link px-2">admin panel</a></li>
            <?php endif; ?>
        </ul>
        <?php
        if ($_COOKIE['user'] == '') :
        ?>
            <div class="col-md-3 text-end">
                <button type="button" onclick="location='/login.php'" class="btn btn-outline-primary me-2">Войти</button>
                <button type="button" onclick="location='/auth.php'" class="btn btn-primary">Зарегистрироваться</button>
            <?php else : ?>
                <p><?= $_COOKIE['user'] ?> чтобы выйти нажмите <button type="button" onclick="location='/exit.php'" class="btn btn-primary">ЖАМК</button></p>
            <?php endif; ?>
            </div>
    </header>
