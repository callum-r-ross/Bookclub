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
    $bookGenre = $_POST["bookGenre"];

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
            if($fileSize < 500000){
                $sql_query = "INSERT INTO bookReviews (bookTitle,authorFirstName,authorLastName,bookPublisher,bookSummary,bookRating,bookRecommended,bookGenre) VALUES ('$bookTitle','$authorFirstName','$authorLastName','$bookPublisher','$bookSummary','$bookRating','$bookRecommended','$bookGenre')";

                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: index.php?uploadsuccess");
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
    } else {
        echo "Error, book not added";
    }
    header("Location: index.php");
}
?>