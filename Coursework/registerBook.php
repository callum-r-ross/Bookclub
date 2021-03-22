<?php
session_start();
include("connection.php");

    //Get user id
    $username = $_SESSION["username"];
    $sql_userID_query = "SELECT * FROM users WHERE username = '$username'";
    $userID_result = $db->query($sql_userID_query);
    $row = $userID_result->fetch_array();
    $userID = $row["userID"];

    // Form post variables
    $bookTitle = mysqli_real_escape_string($db,$_POST['bookTitle']);
    $authorFirstName = mysqli_real_escape_string($db,$_POST['authorFirstName']);
    $authorLastName = mysqli_real_escape_string($db,$_POST['authorLastName']);
    $bookPublisher = mysqli_real_escape_string($db,$_POST['bookPublisher']);
    $bookSummary = mysqli_real_escape_string($db,$_POST['bookSummary']);
    $bookRating = mysqli_real_escape_string($db,$_POST['bookRating']);
    $bookGenre = mysqli_real_escape_string($db,$_POST['bookGenre']);

    $sql = "INSERT INTO bookReviews (bookTitle,authorFirstName,authorLastName,bookPublisher,bookSummary,bookRating,bookGenre,userID,bookCover) VALUES (?,?,?,?,?,?,?,?,?);";

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

    if(in_array($fileActualExt,$allowed) && $fileError === 0 && $fileSize < 50000000){       
    } else {
        echo "Error image not allowed";
    }

    $stmt = mysqli_stmt_init($db);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "Error, book not added";
        } 
    else {
        mysqli_stmt_bind_param($stmt,"sssssisss",$bookTitle,$authorFirstName,$authorLastName,$bookPublisher,$bookSummary,$bookRating,$bookGenre,$userID,$fileActualExt);
        mysqli_stmt_execute($stmt);

        $bookID = mysqli_insert_id($db);
        $fileNameNew = $bookID.".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName,$fileDestination);

        header("Location: index.php");
    }

?>