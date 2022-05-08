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
    $directory = getcwd()."/";
    $story_count = 0;  
    $story_count = glob( $directory ."/stories/story*.txt" );
    if( $story_count) {
        $story_count = count($story_count);
        $story_count++;
    }
    ?>
    <?php



    for ($i = $story_count-1; $i > 0 ; $i--) {
        $stories = file_get_contents("stories/story$i.txt");
        $story = explode("|", $stories);
    ?>

        <hr />

        <a href="story.php?story=<?php print $i ?>"><?= $story[0] ?></a>
        <p> by: <?= $story[2] ?>&emsp;</p>

        <hr />

    <?php
    }
    ?>
</body>

</html>