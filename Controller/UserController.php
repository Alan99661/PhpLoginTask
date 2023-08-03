<?php

declare(strict_types=1);

$callUserController = new UserController();

class UserController
{
    public function __construct()
    {
        echo $this->showLoginPage();
    }

    private function showLoginPage(): void
    {
        require_once "../View/LoginPage.php";
    }
}