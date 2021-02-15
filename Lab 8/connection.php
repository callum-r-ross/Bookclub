<?php
// Create variables to store log in information
$servername = "localhost";
$dbname = "smdb";
$username = "root";
$password = "root";

// Create connection to database
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection to db
if ($db->connection_error){
    die("Connection failed: " . $db->connect_error);
}

echo "success";
?>