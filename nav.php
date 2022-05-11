<head>
  <!-- CSS -->
  <link rel="stylesheet" href="css/nav.css">

  <!-- Fonts Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<?php
// If user is not logged in
if ('' == file_get_contents("files/signedin.txt")) {
    // file is empty, print one nav
?>

    <div class="nav">
        <a href="homepage.php"><span class ="homepage-text">Reddit 2.0</span></a>
        <a href="">About</a>
        <a href="">Contact</a>
        <a href="login.php">Login</a>
    </div>

<?php
} else {

    //Collect username
    $signed_in = file("files/signedin.txt");
    $signed_in = explode("|", $signed_in[1]);

?>

    <div class="nav">
        <a href="homepage.php"><span class ="homepage-text">Reddit 2.0</span></a>
        <a href="create_story.php">Create Story</a>
        <a href="">About</a>
        <a href="">Contact</a>
        <a href="login.php">Logout</a>

        <p><span class="login-text">Currently logged in as <?php print $signed_in[0]; ?></span></p>
    </div>

<?php } ?>
