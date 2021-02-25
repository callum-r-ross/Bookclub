<?php
// Variables to hold database information
$servername = "localhost";
$dbname = "bookclub";
$password = "root";
$username ="root";

// Connect to database
$db = new mysqli($servername,$username,$password,$dbname);

// Check the database is connected
if($db->connect_error){
    die("Connection error: " . $db->connect_error);
}
// Commented out once it shows database is connected
//echo "Success";