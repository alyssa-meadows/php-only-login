<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();

    if(isset($_POST['submit'])) {
        $member_username = "fred";
        $member_password ="password";
        
        $username = strtolower($_POST['username']);
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
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <title>Alyssa's simple easy login</title>
    </head>
    <body>
        <div class="container">
               
            <h1>Simple PHP Only Login System</h1><br />
            
            <form action="index.php" method="POST">
                
                <input type="text" name="username" placeholder="Username" /><br />
                <input type="password" name="password" placeholder="Password" /><br /><br />
                <input type="submit" name="submit" value="Login" />
                
            </form>
            
        </div>
    </body>
</html>