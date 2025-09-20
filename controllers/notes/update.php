<?php

use core\App;
use core\Database;
use core\Validator;

$db = App::resolve(Database::class);

$id = $_POST['id'];
$currentUserID = 1;
$errors = [];

$note = $db->query("SELECT * FROM `php_exp`.`notes` WHERE `id` = :id", [':id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserID);

if (!Validator::string($_POST['title'], 1, 16)) {
    $errors['title'] = 'please enter valid size of title (minimum: 1, maximum: 16 character)';
}

if (!Validator::string($_POST['body'], 1, 32)) {
    $errors['body'] = 'please enter valid size of body (minimum: 1, maximum: 24 character)';
}

if (!empty($errors)) {
    // Validation issue
    return view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query(
    "UPDATE `php_exp`.`notes` SET `title` = :title, `body` = :body, `updated_at` = CURRENT_TIMESTAMP WHERE `id` = :id",
    [
        ':title' => $_POST['title'],
        ':body' => $_POST['body'],
        ':id' => $id
    ]
);

header('Location: /notes');
exit();
