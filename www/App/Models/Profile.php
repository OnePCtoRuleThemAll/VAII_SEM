<?php

namespace App\Models;

use App\Core\Model;

class Profile extends Model
{
    protected int $id;
    protected string $name;
    protected string $surename;
    protected string $photo;
    protected int $age;
    protected string $faculty;
    protected int $login_id;

    /**
     * @return int
     */
    public function getLoginId(): int
    {
        return $this->login_id;
    }

    /**
     * @param int $login_id
     */
    public function setLoginId(int $login_id): void
    {
        $this->login_id = $login_id;
    }

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
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo): void
    {
        $this->imageUrl = $photo;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getFaculty(): string
    {
        return $this->faculty;
    }

    /**
     * @param string $faculty
     */
    public function setFaculty(string $faculty): void
    {
        $this->faculty = $faculty;
    }


}