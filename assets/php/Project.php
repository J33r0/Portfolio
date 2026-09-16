<?php

require_once 'Database.php';

class Project extends Database{
    public function __construct() {
        parent::__construct();
    }

    private function translatedColumn(string $field, string $lang): string {
        $language = in_array($lang, ['en', 'fr', 'es'], true) ? $lang : 'en';
        return "COALESCE(NULLIF({$field}_{$language}, ''), {$field}_en, '')";
    }

    private function translatedSelect(string $lang): string {
        $title = $this->translatedColumn('title', $lang);
        $description = $this->translatedColumn('description', $lang);

        return "id, {$title} AS title, {$description} AS description, img_path";
    }

    public function getProjects(): array {
        return $this->pdo->query("SELECT * FROM projects")->fetchAll();   
    }

    public function getProjectsId(): array {
        return $this->pdo->query("SELECT id FROM projects")->fetchAll();   
    }

    public function getProject(int $id, string $lang = 'en'): array {
        $stmt = $this->pdo->prepare("SELECT {$this->translatedSelect($lang)} FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch();
        return $result !== false ? $result : [];
    }

    public function getRandomProjects(string $lang = 'en'): array {
        if (session_status() == PHP_SESSION_NONE) session_start();

        if (!isset($_SESSION['projects_ids'])) {
            $ids = $this->getProjectsId();
            shuffle($ids);
            $_SESSION['projects_ids'] = $ids;
        } 

        $projects = [];

        foreach ($_SESSION['projects_ids'] as $id) {
            $projects[] = $this->getProject($id['id'], $lang);
        }

        return $projects;
    }

    public function searchProject(string $searchTerm, string $lang = 'en'): array {
        $title = $this->translatedColumn('title', $lang);
        $stmt = $this->pdo->prepare("SELECT {$this->translatedSelect($lang)} FROM projects WHERE {$title} LIKE :searchTerm");
        $stmt->execute(['searchTerm' => "%$searchTerm%"]);
        return $stmt->fetchAll();
    }
}