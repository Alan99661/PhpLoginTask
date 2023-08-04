<?php

declare(strict_types=1);

include_once "../Model/User.php";
include_once "../Database/Repositories/UserRepository.php";
include_once "../Database/DatabasePDO.php";

$callLoginValidator = new LoginService();

class LoginService
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->login();
    }

    private function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $username = htmlspecialchars(isset($_POST['username']) ? $_POST['username'] : '');
            $password = htmlspecialchars(isset($_POST['password']) ? $_POST['password'] : '');


            $user = $this->userRepository->findByUsernameAndPassword($username, $password);

            if ($user !== null) {
                http_response_code(200);
                $response = json_encode(array('message' => 'Login successful!'));
                echo $response;
            } else {
                http_response_code(400);
                $response = json_encode(array('message' => 'Invalid credentials!'));
                echo $response;
            }
            exit();
        }
    }
}
