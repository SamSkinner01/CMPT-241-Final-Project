<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You have been signed up!</title>
</head>
<body>

    <?php
        //When the user signs up, write to the file
        $username = $_POST['username'];
        $password = $_POST['password'];
        $to_write = array($username, $password);
        $to_write=implode(",",$to_write);
        file_put_contents("files/users.txt", PHP_EOL.$to_write, FILE_APPEND);
    ?>

    <!-- Feedback for the user -->
    <div class="login">
        <h1>Thank you for signing up!</h1>
        <p>You can now return to the login page and browse the website!</p>
        <p><a href="login.php">Return to login page</a></p>
    </div>
    
</body>
</html>