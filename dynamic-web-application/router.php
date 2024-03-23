<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
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



$routes = [
    "/dynamic-web-application" => "controllers/index.php",
    "/dynamic-web-application/about" => "controllers/about.php",
    "/dynamic-web-application/contact" => "controllers/contact.php",
];

function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code(404);
    require("views/{$code}.php");
    die();
}

routeToController($uri, $routes);