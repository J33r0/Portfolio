<?php

require_once './Database.php';

class Comment extends Database{
    public function __construct() {
        parent::__construct();

        $this->pdo->query('CREATE TABLE IF NOT EXISTS message (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_fname VARCHAR(100) NOT NULL,
            user_lname VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            message TEXT
        )');
    }

    public function insertComment(string $user_fname, string $user_lname, string $email, string $message) {
        $stmt = $this->pdo->prepare("INSERT INTO message ('user_fname', 'user_lname', 'email', 'message') VALUES (:user_fname, :user_lname, :email, :message)");
        $stmt->bindvalue(':user_fname', $user_fname);
        $stmt->bindvalue(':user_lname', $user_lname);
        $stmt->bindvalue(':email', $email);
        $stmt->bindvalue(':message', $message);
        $stmt->execute();
    }

    public function getComment() {
        return ($this->pdo->query("SELECT * FROM message"))->fetchAll();   
    }
}

?>