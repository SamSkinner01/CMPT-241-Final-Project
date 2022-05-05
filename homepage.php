<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>
</head>

<body>

    <?php

    include("nav.php");
    $stories = file('files/stories.txt');
    ?>
    <?php
    for ($i = 0; $i < count($stories); $i++) {
        $story = explode(",", $stories[$i]);
    ?>

        <hr />

        <a href="stories.txt"><?= $story[0] ?></a>
        <p> by: <?= $story[1] ?>,<?= $story[2] ?> </p>

        <hr />

    <?php
    }
    ?>
</body>

</html>