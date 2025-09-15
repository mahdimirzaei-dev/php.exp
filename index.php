<?php

require_once "functions.php";
require_once "router.php";
require_once "Database.php";

$db = new Database();
$users = $db->query("SELECT * FROM `php_exp`.`users`")->fetchAll(PDO::FETCH_ASSOC);
