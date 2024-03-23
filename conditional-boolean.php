<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional and Boolean</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $book_name = "Dark Matter";
        $read = true;

        if ($read) {
            $message = "You have to read $book_name";
        } else {
            $message = "You have not read $book_name";
        }
    ?>
    <h1>
        <?= $message ?>
    </h1>
</body>
</html>