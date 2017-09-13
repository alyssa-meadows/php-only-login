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
        <title>Secret Website...shhh</title>
    </head>
    <body>
        <h1>Secret User Page</h1>
        <h3>Welcome, <?php echo $username; ?></h3>
        
        <form action="logout.php">
            <input type="submit" value="Logout, dude."/>
        </form>
        
    </body>
</html>