<?php
include("connection.php");
echo "<h1>All Marvel Movies</h1>";

// Sql query
$sql = "SELECT * FROM `marvelmovies` WHERE 1 ";

// Variable which holds result of the search
$result = $db->query($sql);

while($row = $result -> fetch_array()){
    echo "<p>" . $row['title'] . "</p>";
}

$result->close();
$db->close();

?>