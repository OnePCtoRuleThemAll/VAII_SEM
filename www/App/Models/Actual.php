<?php

namespace App\Models;

use App\Core\Model;

class Actual extends Model
{
    protected int $id;
    protected string $name;
    protected string $surename;
    protected int $points;
    protected string $note;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurename(): string
    {
        return $this->surename;
    }

    /**
     * @param string $surename
     */
    public function setSurename(string $surename): void
    {
        $this->surename = $surename;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }


}
