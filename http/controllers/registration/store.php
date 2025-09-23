<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$email = $_POST["email"];
$password = $_POST["password"];
$username = explode('@', $email)[0];
$errors = [];

// Validate
if (!Validator::email($email)) {
    $errors["email"] = "Please provide a valid email address.";
}

if (!Validator::string($password, 8, 255)) {
    $errors["password"] = "Please provide a password of at least 8 character.";
}

if (!empty($errors)) {
    return view('registration/create.view.php', [
        "errors" => $errors
    ]);
}

$user = $db->query(
    "SELECT * FROM `php_exp`.`users` WHERE `email` = :email",
    [
        ":email" => $email
    ]
)->find();

if ($user) {
    header('Location: /');
    exit();
} else {
    $db->query(
        "INSERT INTO `php_exp`.`users` (`username`, `email`, `password`) VALUES (:username, :email, :password)",
        [
            ":username" => $username,
            ":email" => $email,
            ":password" => password_hash($password, PASSWORD_BCRYPT)
        ]
    );

    login([
        "email" => $email
    ]);

    header('Location: /');
    exit();
}
