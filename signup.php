<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>

    <!-- Signup -->
    <!-- Using same CSS as login page-->
    <div class="login">
        <h1>Create an Account!</h1>
        <p>Please enter the information below.</p>
        <div class="login-form">
            <!-- Login Form -->
            <form action="signup-submit.php" method="post">
                <p class="login-text">Username</p>
                <input class="login-input" type="username" size="25" name="username" pattern="[A-Za-z0-9]+" required>
                <br>
                <p class="login-text">Password</p>
                <input class="login-input" type="password" size="25" name="password" required>
                <br>
                <br>
                <input class="login-submit" type="submit" value="Create Account">
                <br>
                <br>

            </form>
        </div>
        <!-- Create a New Account or Login as Guest -->
        <p><a href="login.php">Return to login page</a></p>

    </div>

</body>

</html>