<?php

require_once '../assets/php/Project.php';

$database = new Project();
$pdo = $database->getPdo();

$projects = $database->getRandomProjects();

$projects = array_slice($projects, 4);

header('Content-Type: application/json');
echo json_encode($projects);