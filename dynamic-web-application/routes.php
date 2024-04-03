<?php

$router->get('/dynamic-web-application', 'controllers/index.php');
$router->get('/dynamic-web-application/about', 'controllers/about.php');
$router->get('/dynamic-web-application/notes', 'controllers/notes/index.php');
$router->get('/dynamic-web-application/note', 'controllers/notes/show.php');
$router->get('/dynamic-web-application/notes/create', 'controllers/notes/create.php');
$router->get('/dynamic-web-application/contact', 'controllers/contact.php');