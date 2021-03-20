<?php
include("connection.php");

//Get user id
session_start();
if(empty($_SESSION)){
    header("Location: index.php");
    exit();
}
$username = $_SESSION["username"];
$sql_userID_query = "SELECT * FROM users WHERE username = '$username'";
$userID_result = $db->query($sql_userID_query);
$row = $userID_result->fetch_array();
$userID = $row["userID"];

//From post variables
$bookClubPost = mysqli_real_escape_string($db,$_POST['bookClubPost']);

$sql = "INSERT INTO bookClub (bookClubPost,userID,username) VALUES (?,?,?);";

$stmt = mysqli_stmt_init($db);

if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "Error post not added";
} else {
    mysqli_stmt_bind_param($stmt,"sis",$bookClubPost,$userID,$username);
    mysqli_stmt_execute($stmt);
    header("Location: book-club.php");
}
?>