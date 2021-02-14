<?php
// Start the session
session_start();

/* All username and password combinations are stored in a seperate
    php file, require_once is used as the file is only needed one time. */
require_once "userAccounts.php";

// Declare functions
//This function returns true if the username has an associated password in file loginAccounts.php
function checkLogin($username, $password)
{
    // Declare loginAccounts as a global variable
    global $userAccounts;
    
  // Check if username entered has been set in array
   if(!isset($userAccounts[$username])){
       return(false);
   } 
   
   // Check if entered username has an associated password
   return($password==$userAccounts[$username]);
}

// This function ends the session, redirects to the login page and exits the php script
function redirect(){
    session_destroy();
    header("Location: loginPage.php");
    exit();
}

//If theres no post array then the form hasn't been submitted, redirect function is called
if(!IsSet($_POST))
{
   redirect();
}

// If the username or password is not set then the form hasnt been submitted properly, redirect function is called
if(!IsSet($_POST["username"]) || !IsSet($_POST["password"])){
    redirect();
}

// Set username and password variables to that from html form
$username = $_POST["username"];
$password = $_POST["password"];

// If the function returns true then we end the php script and go to homePage
if(checkLogin($username,$password)){
    $_SESSION["username"]=$username;
    header("Location: homePage.php");
    exit();
}

// Else call redirect function
redirect();
?> 