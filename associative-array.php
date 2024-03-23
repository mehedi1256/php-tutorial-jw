<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Arrays</title>
</head>
<body>
<h1>Recommended Books</h1>
<?php
$books = [
    [
        "name" => "Do Androids Dream of Electric Sheep",
        "author" => "The Langoliers",
        "purchaseUrl" => "http://example.com"
    ],

    [
        "name" => "Do Androids Dream of Electric Sheep",
        "author" => "The Langoliers",
        "purchaseUrl" => "http://example.com"
    ]
];
?>

<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book["name"] ?></li>
        <li><?= $book["author"] ?></li>
        <li>
            <a href="#">
                <?= $book["purchaseUrl"] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>