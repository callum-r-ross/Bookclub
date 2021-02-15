<?php
// Create variables to store log in information
$servername = "localhost";
$dbname = "cmm007";
$username = "root";
$password = "root";

// Create connection to database
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection to db
if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
//echo "success";
?>