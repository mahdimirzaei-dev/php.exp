<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if ($uri === '/') {
//     require_once "controllers/index.php";
// } else if ($uri === '/about') {
//     require_once "controllers/about.php";
// } else if ($uri === '/contact') {
//     require_once "controllers/contact.php";
// }

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
    "/notes" => "controllers/notes.php",
    "/note" => "controllers/note.php",
];

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

routeToController($uri, $routes);
