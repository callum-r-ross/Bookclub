<?php
include("db_connect.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$power = $_POST["power"];

$sql = "INSERT INTO superheros (firstName,lastName,mainSuperpower) VALUES ('$firstname','$lastname','$power')";

if(mysqli_query($db, $sql)){
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

header("Location: index.php");
?>