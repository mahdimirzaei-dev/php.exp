<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$id = $_GET['id'];
$currentUserID = 1;

$note = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `id` = :id', [':id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserID);

view("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);
