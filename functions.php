<?php

// dump the variable and die.
function dd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";

    die();
}

// return the current URL what this is.
function isUrl($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorize($cond, $status = Response::FORBIDDEN)
{
    if (!$cond) {
        abort($status);
    }
}

function basePath($path)
{
    return BASE_PATH . $path;
}

function assets($path)
{
    return 'http://localhost:8000/assets/' . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require basePath('views/' . $path);
}
