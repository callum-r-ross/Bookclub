<?php
// Connect to the database
include("connection.php");

// Check to see if username and password are entered
if(empty($_POST["username"]) || empty($_POST["password"])){
    echo "Both fiels are required";
} else {
    // Save entered username and password into variables
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT uid FROM users WHERE username = '$username' and password = '$password'";
    
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION["username"] = $username;
        header("Location: index.php");
    } else {
        echo "Error, incorrect username and password";
    }
}
?>