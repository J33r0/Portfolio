<?php

$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);


if ($message !== '' && $username !== '' && strlen($username) < 100) {
    $pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");

    $pdo->query('CREATE TABLE IF NOT EXISTS message (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT
    )');

    $stmt = $pdo->prepare("INSERT INTO message ('username', 'email', 'message') VALUES (:username, :email, :message)");
    $stmt->bindvalue(':username', $username);
    $stmt->bindvalue(':email', $email);
    $stmt->bindvalue(':message', $message);
    $stmt->execute();
}

header('Location: /contact.php');


?>