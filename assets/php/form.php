<?php
require_once './Comment.php';
require_once './Project.php';

$user_fname = htmlspecialchars($_POST['user_fname']);
$user_lname = htmlspecialchars($_POST['user_lname']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);


if ($message !== '' && $user_fname !== '' && strlen($user_fname) < 100 && $user_lname !== '' && strlen($user_lname) < 100 && $email !== '' && strlen($email) < 100 && filter_var($email, FILTER_VALIDATE_EMAIL) && $message !== ''){
    $comment = new Comment();
    $comment->insertComment($user_fname, $user_lname, $email, $message);
}

header('Location: /contact.php');


?>