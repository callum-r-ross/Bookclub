<?php
// Variables to hold database information
$servername = "localhost";
$dbname = "cmm007";
$password = "root";
$username ="root";

// Connect to database
$db = new mysqli($servername.$username,$password,$dbname);

// Check the database is connected
if($db->connect_error){
    die("Connection error: " .$db->connect_error)
}
echo "Success";