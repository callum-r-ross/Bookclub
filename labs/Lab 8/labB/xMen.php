<?php
echo "<h1>All X-Men Films</h1>";

include("connection.php");

$sql = "SELECT `title` FROM `marvelmovies` WHERE `title` LIKE '%X-MEN%'";

$result = $db->query($sql);

while($row = $result->fetch_array()){
    echo "<p>" . $row['title']. "</p>";
}

$result->close();
$db->close();
?>