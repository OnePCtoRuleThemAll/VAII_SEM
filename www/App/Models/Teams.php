<?php

namespace App\Models;

use App\Core\Model;

class Teams extends Model
{
    protected int $id;
    protected string $team_name;
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
    public function getTeamName(): string
    {
        return $this->team_name;
    }

    /**
     * @param string $team_name
     */
    public function setTeamName(string $team_name): void
    {
        $this->team_name = $team_name;
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