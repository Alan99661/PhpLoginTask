<?php


class UserRepository
{
    private DatabasePDO $database;

    public function __construct()
    {
        $this->database = new DatabasePDO();
    }

    public function findByUsernameAndPassword(string $username, string $password): ?User
    {
        $query = "
        SELECT id as id,
        username as username,
        password as password 
        FROM user
        WHERE username = :username AND password = :password";

        $connection = $this->database->getConnection();
        $statement = $connection->prepare($query);
        $statement->bindParam(':username', $username);
        $statement->bindParam(':password', $password);
        $statement->execute();

        $result = $statement->fetchObject(User::class) ?: null;

        return $result;

    }

}
