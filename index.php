<?php
$title = "glav";
require_once "blocks/header.php";
require_once "function/connect.php";
?>
<?php
$stmt = $pdo->prepare("SELECT *, UNIX_TIMESTAMP(publish_time) AS publish_timestamp FROM `glav`");
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">LexHub</h1>
                <p class="lead text-body-secondary">Что-то краткое и ведущее о коллекции ниже - ее содержание, создатель и т.д. Сделайте ее короткой и интересной, но не слишком короткой, чтобы люди просто не пропустили ее полностью.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Главный</a>
                    <a href="#" class="btn btn-secondary my-2">Вторичное</a>
                </p>
            </div>
        </div>
    </section>


    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($res as $resu) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="image/<?php echo $resu['filename']; ?>" alt="Image" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text"><?php echo $resu['text']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть</button>
                                        <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button> -->
                                    </div>
                                    <small class="text-body-secondary"><?php echo getTimeElapsed($resu['publish_timestamp']); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <?php
    // Функция для форматирования разницы времени
    function getTimeElapsed($publishTime)
    {
        date_default_timezone_set('Europe/Moscow');

        $currentTime = time();
        $timeDiff = $currentTime - $publishTime;

        $intervals = [
            'year' => 31536000,
            'month' => 2592000,
            'week' => 604800,
            'day' => 86400,
            'hour' => 3600,
            'minute' => 60,
            'second' => 1
        ];

        foreach ($intervals as $label => $value) {
            if ($timeDiff >= $value) {
                $time = floor($timeDiff / $value);
                return $time . ' ' . getRussianLabel($time, $label) . ' назад';
            }
        }

        return 'только что';
    }

    // Функция для получения правильного окончания слова на русском языке
    function getRussianLabel($number, $label)
    {
        $labels = [
            'year' => ['год', 'года', 'лет'],
            'month' => ['месяц', 'месяца', 'месяцев'],
            'week' => ['неделя', 'недели', 'недель'],
            'day' => ['день', 'дня', 'дней'],
            'hour' => ['час', 'часа', 'часов'],
            'minute' => ['минута', 'минуты', 'минут'],
            'second' => ['секунда', 'секунды', 'секунд']
        ];

        $lastDigit = $number % 10;
        $lastTwoDigits = $number % 100;

        if ($lastTwoDigits >= 11 && $lastTwoDigits <= 19) {
            return $labels[$label][2];
        } elseif ($lastDigit === 1) {
            return $labels[$label][0];
        } elseif ($lastDigit >= 2 && $lastDigit <= 4) {
            return $labels[$label][1];
        } else {
            return $labels[$label][2];
        }
    }
    ?>

</main>

<?php
require_once "blocks/footer.php"
?>
