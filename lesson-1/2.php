<?php
$firstTask = readline("Write what you are going to do today:" . PHP_EOL);
$firstTaskTime = readline("How much time will it take?" . PHP_EOL);

$secondTask = readline("Write what you are going to do today:" . PHP_EOL);
$secondTaskTime = readline("How much time will it take?" . PHP_EOL);

$thirdTask = readline("Write what you are going to do today:" . PHP_EOL);
$thirdTaskTime = readline("How much time will it take?" . PHP_EOL);

echo "You have got 3 tasks today:" . PHP_EOL .
    "$firstTask ($firstTaskTime)" . PHP_EOL .
    "$secondTask ($secondTaskTime)" . PHP_EOL .
    "$thirdTask ($thirdTaskTime)" . PHP_EOL;
