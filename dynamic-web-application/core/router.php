<?php


$routes = require base_path('routes.php');

//dd(parse_url($uri));
//if ($uri === "/dynamic-web-application")
//{
//    require("controllers/index.php");
//}
//elseif ($uri === "/dynamic-web-application/about")
//{
//    require("controllers/about.php");
//}
//elseif ($uri === "/dynamic-web-application/contact")
//{
//    require("controllers/contact.php");
//}





function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code(404);
    require base_path("views/{$code}.php");
    die();
}
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
routeToController($uri, $routes);