<?php
//Set username and password values
$checkUsername = "user123";
$checkPassword = "letmein123";

//Gather usname and password submitted from html form
$username = $_POST["username"];
$password = $_POST["password"];

if($username == $checkUsername && $password == $checkPassword){
    //Set both the cookies
    setcookie('username','$username');
    setcookie('user_access','standard_access');
}

header('Location: homepage.php');

?>