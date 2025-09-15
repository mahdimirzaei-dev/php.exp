<?php

require_once "functions.php";
require_once "router.php";
require_once "Database.php";

$config = require_once "config.php";

$db = new Database($config['database']);

$users = $db->query("SELECT * FROM `php_exp`.`users`")->fetchAll();
