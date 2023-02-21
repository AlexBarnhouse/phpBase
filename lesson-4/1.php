<?php
$arr = [4, 5, 1, 4, 0, 7, 8, 15, 6, 71, 45, 2];

$result = array_map(function($num) {
    if ($num === 0) {
        echo "Это ноль" . PHP_EOL;
    } else {
        echo $num % 2 ? "Число $num нечетное" . PHP_EOL : "Число $num четное" . PHP_EOL;
    }
}, $arr);
