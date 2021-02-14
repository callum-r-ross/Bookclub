<?php
// Start or resume session
    session_start();
    // If session does not contain username, redirect to loginPage
    if(!isset($_SESSION["username"])){
        header("Location: loginPage.php");
    }
    //Save username in a variable 
    $username=$_SESSION["username"];
?>
<!--HTML with links to logout page and loginPage-->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <header><h1>It works</h1></header>
    <?php echo "Hello {$username} " ?>
    <p><a href="logout.php">Click here to log out</a></p>
    <p><a href="loginPage.php">Click me to go to login page</a></p>
</body>
</html>

