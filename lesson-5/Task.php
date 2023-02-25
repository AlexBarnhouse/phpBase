<?php
require_once 'TaskService.php';
class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    function __construct(User $user) {
        $this->user = $user;

        $this->dateCreated = new DateTime();
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description ?? 'not set';
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;

        $this->dateUpdated = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function markAsDone():void
    {
        $this->isDone = true;

        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(Comment $comment):void
    {
        $this->comments[] = $comment;
    }
}