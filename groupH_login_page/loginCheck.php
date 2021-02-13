<?php
// Start the session
session_start();
//If theres no post array then the form hasn't been submitted
if(!IsSet($_POST))
{
    // End session and redirect to loginPage
    session_destroy();
    header("Location: loginPage.php");
    exit();
}

// If eithe username or password is not set then the form hasnt been submitted properly
if(!IsSet($_POST["username"]) || !IsSet($_POST["password"])){
    //End session and redirect to loginPage
    session_destroy();
    header("Location: loginPage.php");
    exit();
}

/* All username and password combinations are stored in a seperate
    php file, require_once is used as the file is only needed one time. */
require_once "userAccounts.php";

// Declare functions
/* This function returns true if the username has an associated passwordf
    in file loginAccounts.php */
function checkLogin($username, $password)
{
    // Declare loginAccounts as a global variable
    global $userAccounts;
    
  // Check if username entered has been set in array
   if(!isset($userAccounts[$username])){
       return(false);
   } 
   // Else check if username has a password
   return($password==$userAccounts[$username]);
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

// Else if the function returns false we redirect to login page
session_destroy();
header("Location: loginPage.php");
?> 