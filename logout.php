<?php
    session_start();
    session_destroy();
?>

<!DOCTYPT html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
    <body>
        <div class="container center">
            <h2>You are logged out. </ br></h2>
            <a href="index.php">Click here to log back in.</a>
        </div>
    </body>
</html>