<?php

use core\Database;

$config = require base_path("config.php");
$db = new Database($config['database'], 'root', '');

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /dynamic-web-application/notes');
exit();
