<?php
$arr1 = [1,2,3,4,5,6,7,8,9,10];
$arr2 = [1,2,3,4,5,6,7,8,9,10];
$arrRes = [];

for ($i = 0; $i < count($arr1); $i++){
    $arrRes[] = $arr1[$i] * $arr2[$i];
}

print_r($arrRes);