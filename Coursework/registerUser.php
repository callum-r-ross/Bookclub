<?php
include("connection.php");
if(!isSet($_POST)){
    echo "Error";
    header("Location: index.php");
    die();
} else {
    $firstName = mysqli_real_escape_string($db,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($db,$_POST['lastName']);
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $email = mysqli_real_escape_string($db,$_POST['email']);

    
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result) != 0){
        echo "Username is taken";
    } else {
        $sql_query = "INSERT INTO users (firstName,lastName,username,password,email) VALUES ('?,?,?,?,?);";

   $stmt = mysqli_stmt_init($db);
   if(!mysqli_stmt_prepare($stmt,$sql)){
       echo "Error";
   } else {
       mysqli_stmt_bind_param($stmt,"sssss",$firstName,$lastName,$username,$password,$email);
       mysqli_stmt_execute($stmt);
       header("Location: index.php");
   }
}
}
?>