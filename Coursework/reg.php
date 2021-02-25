<?php
include("connection.php");
if(!isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    
    $sql_query = "INSERT INTO userInfo (username,password,firstname,surname,email) VALUES ('$username','$password','$firstname','$surname','$email')";

    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error";
    }
    session_start();
    $_SESSION["username"] = $username;
    header("Location: index.php");
}
?>