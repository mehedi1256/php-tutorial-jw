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

require "index.view.php";
