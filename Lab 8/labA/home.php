<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h2>All the users on the site are as follows</h2>
    <?php
    include("connection.php");

    $sql = "SELECT uid FROM users";
    $resultt = mysqli_query($db,$sql);

    $roww = mysql_fetch_array($resultt,mysqli_assoc);

    while($roww = mysql_fetch_array_assoc($resultt)){
        echo "Username = {$roww}";
    }
    ?>
</body>
</html>