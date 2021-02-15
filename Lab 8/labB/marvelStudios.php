<?php
// Ensure database is connected
include("connection.php");

echo "<h1>Marvel Movies created by Marvel Studios</h1>";
$m = "Marvel Studios";
// Sql query
$sql = "SELECT title FROM marvelmovies";

// Variable which holds result of the search
$result = $db->query($sql_query);

while($row = $result -> fetch_array()){
    echo "HI";
}

$result->close();
$db->close();
?>