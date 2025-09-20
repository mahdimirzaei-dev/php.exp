<?php

use core\App;
use core\Database;

$db = App::resolve(Database::class);

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
