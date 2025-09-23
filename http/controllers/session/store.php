<?php

use core\Authenticator;
use http\forms\LoginForm;

$email = $_POST["email"];
$password = $_POST["password"];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirect("/");
    }
    $form->error("email", "No matching account found for that email address and password.");
};

return view('sessions/create.view.php', [
    "errors" => $form->errors()
]);
