<?php

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . "core/functions.php";

spl_autoload_register(function ($class) {
    require_once basePath("core/{$class}.php");
});

require_once basePath("core/router.php");
