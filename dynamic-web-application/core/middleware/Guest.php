<?php

namespace core\middleware;
class Guest
{
    public function handle() {
        if ($_SESSION['user'] ?? false) {
            header('location: /dynamic-web-application');
            exit();
        }
    }
}