<?php

class Database
{
    private $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=php_exp;user=root;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }

    public function __destruct() {}
}
