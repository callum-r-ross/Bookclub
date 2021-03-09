<?php
include("connection");
session_start();
if(!isset($_POST)){
    header("Location: index.php");
    exit();
} else {
    $searchTerm = mysqli_real_escape_string($_POST["searchTerm"]);

    $sql = "SELECT * FROM bookReviews WHERE bookTitle LIKE '%?%'";
}
?>