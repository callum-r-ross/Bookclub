<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero Systems</h1>
    <h2>Display all Superheros</h2>
    <p><a href="index.php">Back Home</a></p>
</header>
<main>
    <?php
    include("db_connect.php");
    $sql_query = "SELECT * FROM superheros";
    $result = $db->query($sql_query);
    while($row = $result->fetch_array()){
        $firstname = $row["firstName"];
        $lastname = $row["lastName"];
        $power = $row["mainSuperpower"];
        echo "<article> 
                    <h3>{$firstname} {$lastname}</h3>
                    <p>This superheros main power is {$power}</p>
                 </arcticle>";
    }
    ?>
</main>
</body>
</html>