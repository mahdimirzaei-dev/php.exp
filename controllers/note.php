<?php

$config = require_once "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];
$heading = "Note ({$id})";

$note = $db->query('SELECT * FROM `php_exp`.`notes` WHERE `id` = :id', [':id' => $id])->fetch();

require_once "views/note.view.php";
