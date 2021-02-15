<?php
 $username = $_POST['username'];
 $password = $_POST['password'];

 if($username == "username" && $password == "password"){
     session_start();
     $_SESSION['access_level'] = "standard";
 }

 header('Location: loggedIn.php');