<?php

declare(strict_types=1);

class User
{
    private string $userName;

    private string $password;

    public function getUserName(): string{
        return $this->userName;
    }

    public function setUserName(string $value): void {
        $this->userName = $value;
    }

    public function getPassword(): string{
        return $this->password;
    }

    public function setPassword(string $value): void {
        $this->password = $value;
    }

}