<?php

require_once '../assets/php/Project.php';

$database = new Project();
$pdo = $database->getPdo();

$projects = $database->getProjects();

header('Content-Type: application/json');
echo json_encode($projects);