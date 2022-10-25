<?php

namespace App\DatabaseModel;
use \PDO;

class Model
{
    public $pdo;
    public function __construct()
    {
        try {
//            $this->pdo = new \PDO('mysql:host=....;dbname=products;charset=utf8mb4', '....', '....');
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
}
class User extends Model
{
    public function findInfo()
    {
        return $this->query("SELECT * FROM info");
    }
}


