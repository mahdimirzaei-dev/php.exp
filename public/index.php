<?php

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . "core/functions.php";

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require_once basePath("{$class}.php");
});

$router = new \core\Router();

$routes = require_once basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
