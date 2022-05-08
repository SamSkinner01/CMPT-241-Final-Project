<?php
ini_set('display_errors', 'Off');
// Getting POST information
$username = $_POST["username"];
$password = $_POST["password"];

// Putting all users into $users
$users = file("files/users.txt");

// For all users
for ($i = 0; $i < count($users); $i++) {
    $user = explode("|", $users[$i]);

    // redirect to homepage if username and password are the same
    if ($user[0] == $username && $user[1] == $password) {

        //Storing the name and whether or not they are signed in
        $signed_in = array("$username");
        $signed_in = implode(",", $signed_in);
        file_put_contents("files/signedin.txt", PHP_EOL . $signed_in, FILE_APPEND);

        header("Location: homepage.php");
        exit();
    }
}

?>

<h1>You have entered information that is not currently in our system.</h1>
<p>
    Go to <a href="login.php">login</a> to try again or
    <a href="signup.php">create an account</a>
</p>