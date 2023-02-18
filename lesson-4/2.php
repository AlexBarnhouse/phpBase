<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function findMinMaxAvg(array $arr):array {
    $minValue = $arr[0];
    $maxValue = $arr[0];
    $sumValue = 0;

    for ($i = 0; $i < count($arr); $i++) {
        $sumValue = $sumValue + $arr[$i];
        if ($arr[$i] < $minValue) {
            $minValue = $arr[$i];
        }
        if ($arr[$i] > $maxValue) {
            $maxValue = $arr[$i];
        }
    }

    $avgValue = $sumValue / count($arr);

    return ['minValue'=>$minValue,
        'maxValue'=>$maxValue,
        'avgValue'=>$avgValue,
    ];
}

print_r(findMinMaxAvg($arr));