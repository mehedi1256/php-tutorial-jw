<?php
require("functions.php");
require("Database.php");
//require("router.php");

//connect to our mySQL database using PDO
$config = require("config.php");
$db = new Database($config['database'], 'root', '');

$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);
dd($posts);
foreach($posts as  $post) {
//    echo "<li>" . $post . "</li>";
    echo "<li>{$post['title']}</li>";
}

