<?php

require_once 'Database.php';

class Project extends Database{
    public function __construct() {
        parent::__construct();

        $this->pdo->query('CREATE TABLE IF NOT EXISTS project (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            title VARCHAR(100) NOT NULL,
            description TEXT NOT NULL,
            image VARCHAR(100) NOT NULL
        )');
    }

    public function insertProject(string $title, string $description, string $image): void{
        $stmt = $this->pdo->prepare("INSERT INTO project ('title', 'description', 'image') VALUES (:title, :description, :image)");
        $stmt->bindvalue(':title', $title);
        $stmt->bindvalue(':description', $description);
        $stmt->bindvalue(':image', $image);
        $stmt->execute();
    }

    public function getProjects(): array {
        return $this->pdo->query("SELECT * FROM project")->fetchAll();   
    }
}