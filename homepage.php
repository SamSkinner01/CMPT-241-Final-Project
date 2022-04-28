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
    ini_set('display_errors', 'Off'); //Change while debugging!! It's off so that user isn't prompted of error messages
    //Gather all the information about the user
    $returning_user = $_POST['username'];
    $password = $_POST['password'];

    $users = file('files/users.txt');



    for ($i = 0; $i < count($users); $i++) {
        $user = explode(",", $users[$i]);

        //If the user does exist mark this as true
        if ($user[0] == $returning_user && $user[1] == $password) {
            $signed_in_user = array("$returning_user", "true"); //Save signed in user info
            $signed_in_user = implode(",", $signed_in_user);
            file_put_contents("files/signedin.txt", PHP_EOL . $signed_in_user, FILE_APPEND);
            break;
        }
    }

    //If the user is not in the system, reroute them back to the login page as they shouldn't be able to view the website
    include("isSignedIn.php");
    
    ?>
    <!-- Main Content -->
</body>

</html>