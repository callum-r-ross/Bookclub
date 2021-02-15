<?php
// Connect to the database
include("connection.php");

// Check if username and password have both been entered
if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    //  Assign username and password values to variables
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query for userid of entered username and password
    $sql = "SELECT uid FROM users WHERE username = '$username' and password = '$password'";

    // Varilable to hold result of search
    $result = mysqli_query($db,$sql);

    // If only 1 row returned then there is succesful sign in
    // else something has gone wrong and we display a error message
    if(mysqli_num_rows($result) == 1)
    {
        header("Location: home.php");
    } else {
        echo "Incorrect username or password";
    }
}
?>