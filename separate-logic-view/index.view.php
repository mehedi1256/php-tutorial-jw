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