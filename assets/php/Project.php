<?php

require_once 'Database.php';

class Project extends Database{
    public function __construct() {
        parent::__construct();
    }

    public function getProjects(): array {
        return $this->pdo->query("SELECT * FROM projects")->fetchAll();   
    }

    public function getProject(int $id): array {
        $stmt = $this->pdo->prepare("SELECT * FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}