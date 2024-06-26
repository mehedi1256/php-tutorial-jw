<?php

$router->get('/dynamic-web-application', 'controllers/index.php');
$router->get('/dynamic-web-application/about', 'controllers/about.php');
$router->get('/dynamic-web-application/notes', 'controllers/notes/index.php');
$router->get('/dynamic-web-application/note', 'controllers/notes/show.php');
$router->delete('/dynamic-web-application/note', 'controllers/notes/destroy.php');
$router->get('/dynamic-web-application/note/edit', 'controllers/notes/edit.php');
$router->patch('/dynamic-web-application/note', 'controllers/notes/update.php');
$router->get('/dynamic-web-application/note/create', 'controllers/notes/create.php');
$router->post('/dynamic-web-application/note/create', 'controllers/notes/store.php');
$router->get('/dynamic-web-application/contact', 'controllers/contact.php');

$router->get('/dynamic-web-application/register', 'controllers/registration/create.php');