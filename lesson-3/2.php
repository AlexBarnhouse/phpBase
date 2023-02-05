<?php
$words1 = ['счастья',
    'здоровья',
    'везения',
    'благополучия',];
$words2 = ['бесконечного',
    'крепкого',
    'огромного',
    'вечного',];

$name = readline('Как зовут именинника?');

if ($name !== ''){
    $wishesArr = [];
    for ($i = 0; $i < 3; $i++){
        $word2 = $words2[array_rand($words2, 1)];
        $word1 = $words1[array_rand($words1, 1)];
        $wishesArr[] = $word2;
        $wishesArr[] = $word1;
    }
    $wishesStr = implode(" ", $wishesArr);
    echo "«Дорогой(ая) $name, от всего сердца поздравляю тебя с днем рождения, желаю $wishesStr!»";
} else {
    echo 'Вы не ввели имя';
}

//проверку на уникальность полученных пожеланий не делал, поэтому они могут
//повторяться