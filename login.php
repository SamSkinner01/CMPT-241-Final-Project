<!DOCTYPE html>
<html lang="en">

<?php 
 shell_exec("cat > files/signedin.txt"); // Will execute shell command to empty signedin.txt
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    

    <!-- Login -->
    <div class="login">
        <h1>Sign in!</h1>

        <div class="login-form">
            <!-- Login Form -->
            <form action="loginsubmit.php" method="post">
                <p class="login-text">Username</p>
                <input class="login-input" type="text" size="25" name="username"pattern="[A-Za-z0-9]+" required>
                <br>
                <p class="login-text">Password</p>
                <input class="login-input" type="password" size="25" name="password" required>
                <br>
                <br>
                <input class="login-submit" type="submit" value="Login">
                <br>
                <br>

            </form>
        </div>
        <!-- Create a New Account or Login as Guest -->

        <p><a href="signup.php">Create an Account</a></p>
        <!-- <p><a href="homepage.php">Login as Guest</a></p> -->

    </div>

</body>

</html>