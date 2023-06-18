<?php
$title = "about";
require_once "blocks/header.php";
?>
<h1>ABOUT</h1>

<?php
function summary($arr)
{
    $summ = 0;
    foreach ($arr as $value) {
        $summ += $value;
    }
    return $summ;
}

$list2 = [5, 6, 7, 1, 2, 3, 4, 1.2];
echo summary([4, 5, 3, 2, 1, 66]) . "<br>";
echo summary($list2);
?>
<?php
require_once "blocks/footer.php"
?>
