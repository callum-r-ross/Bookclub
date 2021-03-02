<?php
include("connection.php");
if(! isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    $bookTitle = $_POST["bookTitle"];
    $authorFirstName = $_POST["authorFirstName"];
    $authorLastName = $_POST["authorLastName"];
    $bookPublisher = $_POST["bookPublisher"];
    $bookRating = $_POST["bookRating"];
    $bookSummary = $_POST["bookSummary"];


    $sql_query = "INSERT INTO bookReviews (bookTitle,authorFirstName,authorLastName,bookPublisher,bookSummary) VALUES ('$bookTitle','$authorFirstName','$authorLastName','$bookPublisher',$bookSummary')";

    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error, book not added";
    }
    header("Location: index.php");
}
?>