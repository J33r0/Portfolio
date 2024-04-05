<?php

require_once 'Database.php';

class Project extends Database{
    public function __construct() {
        parent::__construct();
    }

    public function getProjects(): array {
        return $this->pdo->query("SELECT * FROM projects")->fetchAll();   
    }

    public function getProjectsId(): array {
        return $this->pdo->query("SELECT id FROM projects")->fetchAll();   
    }

    public function getProject(int $id): array {
        $stmt = $this->pdo->prepare("SELECT * FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result !== false ? $result : [];
    }

    public function getRandomProjects(): array {
        if (session_status() == PHP_SESSION_NONE) session_start();

        if (!isset($_SESSION['projects_ids'])) {
            $ids = $this->getProjectsId();
            shuffle($ids);
            $_SESSION['projects_ids'] = $ids;
        } 

        $projects = [];

        foreach ($_SESSION['projects_ids'] as $id) {
            $projects[] = $this->getProject($id['id']);
        }

        return $projects;
    }
}