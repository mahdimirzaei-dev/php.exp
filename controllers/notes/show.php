<?php

$config = require_once basePath("config.php");
$db = new Database($config['database']);

$id = $_GET['id'];
$currentUserID = 1;

$note = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `id` = :id', [':id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserID);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
