<?php
include("connection.php");
if(!isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $sql_query = "INSERT INTO users (firstName,lastName,username,password,email) VALUES ('$firstName','$lastName','$username','$password','$email')";

    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error";
    }
    session_start();
    $_SESSION["username"] = $username;
    header("Location: index.php");
}
?>