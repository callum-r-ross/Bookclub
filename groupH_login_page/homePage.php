<?php
// Start or resume session
    session_start();
    if(!isset($_SESSION["username"])){
        // If session does not contain username, redirect to loginPage
        header("Location: loginPage.php");
    }
    $username=$_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <header><h1>It works</h1></header>
    <?php echo "Hello {$_SESSION["username"]}" ?>
    <p><a href="logout.php">Click here to log out</a></p>
</body>
</html>

