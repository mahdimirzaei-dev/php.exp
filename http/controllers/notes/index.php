<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `user_id` = :id', [':id' => 1])->get();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes
]);
