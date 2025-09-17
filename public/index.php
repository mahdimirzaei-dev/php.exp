<?php

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . "core/functions.php";

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require_once basePath("{$class}.php");
});

require_once basePath("core/router.php");
