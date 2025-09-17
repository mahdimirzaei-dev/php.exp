<?php

use core\Database;

$config = require_once basePath("config.php");
$db = new Database($config['database']);

$currentUserID = 1;

$note = $db->query(
    'SELECT * FROM `php_exp`.`notes` WHERE `id` = :id',
    [
        ':id' => $_POST['id']
    ]
)->findOrFail();

authorize($note['user_id'] === $currentUserID);

$db->query(
    "DELETE FROM `php_exp`.`notes` WHERE `id` = :id",
    [
        ':id' => $_POST['id']
    ]
);

header('Location: /notes');
exit();
