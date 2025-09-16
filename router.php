<?php

$routes = require_once "routes.php";

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require_once $routes[$uri];
    } else {
        abort();
    }
}

function abort($status = 404)
{
    http_response_code($status);

    require_once "views/{$status}.php";

    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
