<?php

class TaskService
{
    public static function addComment(User $user, Task $task, string $text):object
    {
       return $comment = new Comment($user, $task, $text);
    }
}