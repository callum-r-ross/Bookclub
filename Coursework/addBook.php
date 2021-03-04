<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: index.php");
    session_destroy();
    die();
}
include("connection.php");
if(! isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    // Form post variables
    $bookTitle = $_POST["bookTitle"];
    $authorFirstName = $_POST["authorFirstName"];
    $authorLastName = $_POST["authorLastName"];
    $bookPublisher = $_POST["bookPublisher"];
    $bookSummary = $_POST["bookSummary"];
    $bookRating = $_POST["bookRating"];
    $bookRecommended = $_POST["bookRecommended"];
    $bookGenre = $_POST["bookGenre"];


    $username = $_SESSION["username"];
    // Get user who left reviews ID
    $sql_userID = "SELECT userID FROM users WHERE username = '$username'";
    $result;
    // Uploaded image variables
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type']; 

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 50000000){
                $sql_query = "INSERT INTO bookReviews (bookTitle,authorFirstName,authorLastName,bookPublisher,bookSummary,bookRating,bookRecommended,bookGenre) VALUES ('$bookTitle','$authorFirstName','$authorLastName','$bookPublisher','$bookSummary','$bookRating','$bookRecommended','$bookGenre')";               
            } else {
                echo "Error";
            }
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }

    if(mysqli_query($db,$sql_query)){
        $fileNameNew = mysqli_insert_id($db).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: index.php?uploadsuccess");
    } else {
        echo "Error, book not added";
    }
    header("Location: index.php");
}
?>