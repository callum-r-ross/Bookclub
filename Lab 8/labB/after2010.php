<?php
echo "<h1>Marvel Movies created after 2010</h1>";

include("connection.php");

$sql = "SELECT `title` FROM `marvelmovies` WHERE `yearReleased` >  '2010'";

$result = $db->query($sql);

while($row = $result->fetch_array()){
    echo "<p>" . $row['title'] ."</p>";
}
$result->close();
$db->close();
?>