<?php

namespace core\middleware;

class Auth
{
    public function handler()
    {
        if (!$_SESSION["user"] ?? false) {
            header("Location: /");
            exit();
        }
    }
}
