<?php
include("connection.php");
if(! isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    $bookTitle = $_POST["bookTitle"];
    $bookAuthor = $_POST["bookAuthor"];
    $bookPublisher = $_POST["bookPublisher"];
    $genre = $_POST["genre"];

    $sql_query = "INSERT INTO books (bookTitle,bookAuthor,bookPublisher,genre) VALUES ('$bookTitle','$bookAuthor','$bookPublisher','$genre')";

    if(mysqli_query($db,$sql_query)){
    }{
        echo "Error, book not added";
    }
    echo "Book added!";
    header("Location: index.php");
    die();
}
?>