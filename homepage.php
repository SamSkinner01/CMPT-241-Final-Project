<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/homepage.css">
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
<div class="homepage-stories">
          <div class="content">
            <a href="story.php?story=<?php print $i ?>"><span class="storyname"><?= $story[0] ?></span></a>
            <p> by: <?= $story[2] ?>&emsp;</p>
            </div>


    <?php
    }
    ?>

</body>

</html>
