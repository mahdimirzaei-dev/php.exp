<?php

$config = require_once "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];
$heading = "Note ({$id})";
$currentUserID = 1;

$note = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `id` = :id', [':id' => $id])->fetch();

if (!$note) {
    abort();
}

if ($note['user_id'] !== $currentUserID) {
    abort(Response::FORBIDDEN);
}

require_once "views/note.view.php";
