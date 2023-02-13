<?php

namespace App\Models;

use App\Core\Model;

class Task extends Model
{
    protected int $id;
    protected int $target;
    protected int $taskmaster;
    protected string $code;
    protected string $state;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTarget(): int
    {
        return $this->target;
    }

    /**
     * @return int
     */
    public function getTaskmaster(): int
    {
        return $this->taskmaster;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setTaskCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }


}