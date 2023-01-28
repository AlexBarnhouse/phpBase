<?php
while (true){
    $taskCount = (int)readline("How many tasks do you need to do today? ");
    if ($taskCount > 0) {
        $taskList = [];
        for ($i = 0; $i < $taskCount; $i++) {
            $taskName = readline("Write what you are going to do today: ");
            $taskTime = readline("How much time will it take? ");

            $taskList = [...$taskList, [$taskName, $taskTime]];
        }

        $totalTime = 0;

        echo "You have got $taskCount tasks today: " . PHP_EOL;
        for ($i = 0; $i < $taskCount; $i++) {
            [$taskName, $taskTime] = $taskList[$i];

            echo "$taskName ($taskTime)" . PHP_EOL;
            $totalTime = $totalTime + $taskTime;
        }
        echo "All tasks will take $totalTime" . PHP_EOL;
        break;
    } else {
        echo 'Incorrect value' . PHP_EOL;
    }
}




