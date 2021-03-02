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

    $sql_query = "INSERT INTO bookReviews (bookTitle,authorFirstName,authorLastName,bookPublisher,bookSummary,bookRating,bookRecommended,bookGenre) VALUES ('$bookTitle','$authorFirstName','$authorLastName','$bookPublisher','$bookSummary','$bookRating','$bookRecommended','$bookGenre')";

    $file=$_FILE['file'];

    $fileName = $_FILE['file']['name'];
    $fileTmpName = $_FILE['file']['tmp_name'];
    $fileSize = $_FILE['file']['size'];
    $fileError = $_FILE['file']['error'];
    $fileType = $_FILE['file']['type'];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            $fileNameNew = uniqid('',true).".".$fileActualExt;

            $fileDestination = 'uploads/'.$fileNameNew;

            move_uploaded_file($fileTmpName,$fileDestination);
        } else {
            echo "there was an error";
        }
    } else {
        echo "Cant upload these files";
    }

    if(mysqli_query($db,$sql_query)){
    } else {
        echo "Error, book not added";
    }
    header("Location: index.php");
}
?>