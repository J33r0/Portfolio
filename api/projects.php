<?php

require_once '../assets/php/Database.php';

$database = new Database();
$pdo = $database->getPdo();

$projects = $pdo->query('SELECT * FROM projects')->fetchAll();

header('Content-Type: application/json');
echo json_encode($projects);