<?php

$config = require_once basePath("config.php");
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `user_id` = :id', [':id' => 1])->get();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes
]);
