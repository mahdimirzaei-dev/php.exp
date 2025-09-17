<?php

use core\Database;
use core\Validator;

$config = require_once basePath("config.php");
$db = new Database($config['database']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!Validator::string($_POST['title'], 1, 16)) {
        $errors['title'] = 'please enter valid size of title (minimum: 1, maximum: 16 character)';
    }

    if (!Validator::string($_POST['body'], 1, 24)) {
        $errors['body'] = 'please enter valid size of body (minimum: 1, maximum: 24 character)';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO `php_exp`.`notes` (`title`, `body`, `user_id`) VALUES (:title, :body, :user_id)', [
            ':title' => $_POST['title'],
            ':body' => $_POST['body'],
            ':user_id' => 1
        ]);

        header('Location: /notes');
    }
}

view("notes/create.view.php", [
    'heading' => 'Create Note',
    'errors' => $errors
]);
