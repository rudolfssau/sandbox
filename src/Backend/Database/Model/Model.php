<?php

namespace App\Model;
use \PDO;

class Model
{
    public $pdo;
    public function __construct()
    {
        try {
            $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname=products;charset=utf8mb4', 'root', '1234');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (\PDOException $ex) {
            $this->pdo = $ex->getMessage();
            return false;
        }
    }
    public function query(string $sql, array $params = []): ?array
    {
        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);
        return $statement->fetchall(PDO::FETCH_ASSOC) ?: null;
    }
    public function insert(string $sql)
    {
        $statement = $this->pdo->prepare($sql);
        return $statement;
    }
    public function delete()
    {

    }
}


