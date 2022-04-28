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
    $signed_in = file('files/signedin.txt');


        $is_signed_in = explode(",", $signed_in[1]); //The files first line will be empty so second line should be true true. When go to login page it will force it to be empty 
        if ($is_signed_in[1] == "true") {

        }
        else{
            //If not true, reroute to login page
    ?>
            <div class="login">
                <h1>Please enter the correct username and password.</h1>
                <p>This website will automatically reroute you to the login page, so please stay put.</p>
            </div>
            <meta http-equiv="refresh" content="2.1; url = login.php" />
    <?php
            return;
        }
    

    ?>
    <!-- Main Content -->
</body>

</html>