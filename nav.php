<head>
    <link rel="stylesheet" href="css/nav.css">
</head>

<?php
// If user is not logged in
if ('' == file_get_contents("files/signedin.txt")) {
    // file is empty, print one nav
?>

    <div class="nav">
        <a href="homepage.php">homepage</a>
        <a href="">about</a>
        <a href="">contact</a>
        <a href="login.php">login</a>
    </div>

<?php
} else {

    //Collect username
    $signed_in = file("files/signedin.txt");
    $signed_in = explode("|", $signed_in[1]);

?>

    <div class="nav">
        <a href="homepage.php">homepage</a>
        <a href="create_story.php">create post</a>
        <a href="">about</a>
        <a href="">contact</a>
        <a href="login.php">logout</a>

        <p>Currently logged in as <?php print $signed_in[0]; ?></p>
    </div>

<?php } ?>