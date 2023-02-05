<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 4,
        'Васильев Василий' => 4,
        'Васильев Кирилл' => 2,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Иванов Антон' => 5,
        'Кириллов Василий' => 3,
        'Андреев Андрей' => 2,
    ]
];
$groupsAverageMark = [];
foreach ($students as $group => $studentsList) {
    $averMark = 0;
    foreach ($studentsList as $mark) {
        $averMark += $mark;
    }
    $groupsAverageMark[$group] = $averMark;
}
arsort($groupsAverageMark);
echo 'Лучшая средняя оценка у группы: ' . array_key_first($groupsAverageMark) . PHP_EOL;

$expulsionList = [];

foreach ($students as $group => $studentsList) {
    $lazyStudents = [];
    foreach ($studentsList as $student => $mark) {
        if ($mark < 3) {
            $lazyStudents[] = $student;
        }
    }
    $expulsionList[$group] = $lazyStudents;
}
echo 'Список студентов на отчисление: ' . PHP_EOL;
print_r($expulsionList);