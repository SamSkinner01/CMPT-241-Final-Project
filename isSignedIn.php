<?php

    $signed_in = file('files/signedin.txt');


    $is_signed_in = explode(",", $signed_in[1]); //The files first line will be empty so second line should be true true. When go to login page it will force it to be empty 
    if ($is_signed_in[1] == "true") {
        return;
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