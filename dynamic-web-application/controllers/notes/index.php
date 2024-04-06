<?php

use core\App;
use core\Database;
$db = App::resolve(Database::class);

$notes = $db->query('select * from notes where user_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
