<?php

$router->get('/dynamic-web-application', 'index.php');
$router->get('/dynamic-web-application/about', 'about.php');
$router->get('/dynamic-web-application/notes', 'notes/index.php')->only('auth');
$router->get('/dynamic-web-application/note', 'notes/show.php');
$router->delete('/dynamic-web-application/note', 'notes/destroy.php');
$router->get('/dynamic-web-application/note/edit', 'notes/edit.php');
$router->patch('/dynamic-web-application/note', 'notes/update.php');
$router->get('/dynamic-web-application/note/create', 'notes/create.php');
$router->post('/dynamic-web-application/note/create', 'notes/store.php');
$router->get('/dynamic-web-application/contact', 'contact.php');

$router->get('/dynamic-web-application/register', 'registration/create.php')->only('guest');
$router->post('/dynamic-web-application/register', 'registration/store.php')->only('guest');
$router->get('/dynamic-web-application/login', 'sessions/create.php')->only('guest');
$router->post('/dynamic-web-application/login', 'sessions/store.php')->only('guest');
$router->delete('/dynamic-web-application/logout', 'sessions/destroy.php')->only('auth');