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
    $bookSummary = $_POST["bookSummary"];
    $bookRating = $_POST["bookRating"];
    $bookRecommended = $_POST["bookRecommended"];

    $sql_query = "INSERT INTO bookReviews (bookTitle,authorFirstName,authorLastName,bookPublisher,bookSummary,bookRating,bookRecommended) VALUES ('$bookTitle','$authorFirstName','$authorLastName','$bookPublisher','$bookSummary','$bookRating','$bookRecommended')";

    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error, book not added";
    }
    header("Location: index.php");
}
?>