<?php
// Ensure database is connected
include("connection.php");

echo "<h1>Marvel Movies created by Marvel Studios</h1>";
// Sql query
$sql =  "SELECT * FROM `marvelmovies` WHERE `productionStudio` LIKE 'Marvel Studios'";

// Variable which holds result of the search
$result = $db->query($sql);

while($row = $result -> fetch_array()){
    echo "<p>" . $row['title'] . "</p>";
}

$result->close();
$db->close();

?>