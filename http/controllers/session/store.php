<?php

use core\App;
use core\Database;
use http\forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST["email"];
$password = $_POST["password"];

$form = new LoginForm();
if (!$form->validate($email, $password)) {
    return view('sessions/create.view.php', [
        "errors" => $form->errors()
    ]);
};

$user = $db->query(
    "SELECT * FROM `php_exp`.`users` WHERE `email` = :email",
    [
        ":email" => $email
    ]
)->find();

if ($user) {
    if (password_verify($password, $user["password"])) {
        login($user);

        header("Location: /");
        exit();
    }
}

return view('session/create.view.php', [
    "errors" => [
        "email" => "No matching account found for that email address and password."
    ]
]);
