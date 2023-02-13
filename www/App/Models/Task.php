<?php

namespace App\Models;

use App\Core\Model;

class Task extends Model
{
    protected int $id;
    protected int $target;
    protected int $taskmaster;
    protected string $code;

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


}