<?php

$router->get('/dynamic-web-application', 'controllers/index.php');
$router->get('/dynamic-web-application/about', 'controllers/about.php');
$router->get('/dynamic-web-application/notes', 'controllers/notes/index.php');
$router->get('/dynamic-web-application/note', 'controllers/notes/show.php');
$router->delete('/dynamic-web-application/note', 'controllers/notes/destroy.php');
$router->get('/dynamic-web-application/note/create', 'controllers/notes/create.php');
$router->post('/dynamic-web-application/note/create', 'controllers/notes/store.php');
$router->get('/dynamic-web-application/contact', 'controllers/contact.php');