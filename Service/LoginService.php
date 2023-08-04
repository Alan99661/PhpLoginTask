<?php

declare(strict_types=1);

class LoginService
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->Login();
    }

    private function Login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $username = trim($username);
            $password = trim($password);

            $user = $this->userRepository->findByUsernameAndPassword($username, $password);

            if ($user !== null) {
                http_response_code(200);
                $response = json_encode(array('message' => 'Login successful!'));
                echo $response;
            } else {
                http_response_code(402);
                $response = json_encode(array('message' => 'Invalid credentials!'));
                echo $response;
            }
            exit();
        }
    }
}

include_once "../Model/User.php";
include_once "../Database/Repositories/UserRepository.php";
include_once "../Database/DatabasePDO.php";

$callLoginValidator = new LoginService();
