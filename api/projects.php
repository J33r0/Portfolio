<?php

require_once '../assets/php/Project.php';

$database = new Project();
$pdo = $database->getPdo();

$searchTerm = $_GET['searchProject'] ?? '';

if (!$searchTerm) {
    $projects = $database->getRandomProjects();
    $projects = array_slice($projects, 4);
}

else {
    $projects = [];
}

// $projects = $database->getRandomProjects();

// $projects = array_slice($projects, 4);

header('Content-Type: application/json');
echo json_encode($projects);