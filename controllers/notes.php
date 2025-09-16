<?php

$config = require_once "config.php";
$db = new Database($config['database']);

$heading = "Notes";

$notes = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `user_id` = :id', [':id' => 1])->fetchAll();

require_once "views/notes.view.php";
