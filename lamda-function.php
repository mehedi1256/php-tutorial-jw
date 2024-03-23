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
        "author" => "Mehedi",
        "releaseYear" => 1958,
        "purchaseUrl" => "http://example.com"
    ],

    [
        "name" => "Do Androids Dream of Electric Sheep",
        "author" => "The Langoliers",
        "releaseYear" => 2021,
        "purchaseUrl" => "http://example.com"
    ],

    [
        "name" => "The Marsian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "http://example.com"
    ]
];
/**
 * custom filter function
 */
//function filter($items, $fn)
//{
//    $filteredItem = [];
//
//    foreach ($items as $item) {
//        if ($fn($item)) {
//            $filteredItem[] = $item;
//        }
//    }
//    return $filteredItem;
//};

$filteredItem = array_filter($books, function($book) {
    return $book["author"] === "Andy Weir";
});
?>

<ul>
    <?php foreach ($filteredItem as $item) : ?>
        <li><?= $item["name"] ?></li>
        <li><?= $item["author"] ?></li>
        <li><?= $item["releaseYear"] ?></li>
        <li>
            <a href="#">
                <?= $item["purchaseUrl"] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>