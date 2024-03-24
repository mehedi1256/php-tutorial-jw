<?php
require("functions.php");
require("Database.php");
//require("router.php");

//connect to our mySQL database using PDO
$config = require("config.php");
$db = new Database($config['database'], 'root', '');
$id = $_GET['id'];
$query = "select * from posts where id = :id";
//dd($query);
$posts = $db->query($query, ['id' => $id])->fetch(PDO::FETCH_ASSOC);
dd($posts);
foreach($posts as  $post) {
//    echo "<li>" . $post . "</li>";
    echo "<li>{$post['title']}</li>";
}

