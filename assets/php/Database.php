<?php

class Database {
    protected PDO $pdo;

    public function __construct() {
        $this->pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo(): PDO {
        return $this->pdo;
    }
}

?>