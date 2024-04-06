<?php

use core\Database;
use core\Validator;
$config = require base_path("config.php");
$db = new Database($config['database'], 'root', '');
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1000 characters is required';
    }

    if (! empty($errors)) {
        return view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $errors
        ]);
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

        header("location: /dynamic-web-application/notes");
        die();
    }
}