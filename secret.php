<?php
    error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    
    if(isset($_SESSION['username'])) {
        
        $username = $_SESSION['username'];
        
    } else {
        
        header('Location: index.php');
        die();
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <title>Secret Website...shhh</title>
    </head>
    <body>
        <div class="container">
        <h1>Secret User Page</h1><br />
        <h3>Welcome, <?php echo $username; ?></h3><br />
        
        <form action="logout.php">
            <input class="center" type="submit" value="Logout, dude."/>
        </form>
        </div>
    </body>
</html>