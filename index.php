<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();

    if(isset($_POST['submit'])) {
        $member_username = "Fred";
        $member_password ="password";
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        // echo $username . " " . $password;
        if($username == $member_username && $password == $member_password) {
            $_SESSION['username'] = $username;
            header('Location: secret.php');
        } else {
            echo "Incorrect username or password! Please try again.";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Alyssa's simple easy login</title>
    </head>
    <body>
        
        <h1>Simple PHP Only Login System</h1>
        
        <form action="index.php" method="POST">
            
            <input type="text" name="username" placeholder="username" /><br />
            <input type="password" name="password" placeholder="Password" /><br />
            <input type="submit" name="submit" value="Login" />
            
        </form>
        
    </body>
</html>