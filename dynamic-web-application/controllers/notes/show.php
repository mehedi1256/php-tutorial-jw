<?php

use core\Database;

$config = require base_path("config.php");
$db = new Database($config['database'], 'root', '');

$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query('delete from notes where id = :id', [
        'id' => $_GET['id']
    ]);

    header('location: /dynamic-web-application/notes');
    exit();
} else {
    $note = $db->query('select * from notes where id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();


    authorize($note['user_id'] === $currentUserId);

    view("notes/show.view.php", [
        'heading' => 'Notes',
        'note' => $note
    ]);
}
