<?php

declare(strict_types=1);

class User
{
    private int $id;
    private string $userName;

    private string $password;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $value): void
    {
        $this->id = $value;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $value): void
    {
        $this->userName = $value;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $value): void
    {
        $this->password = $value;
    }

}