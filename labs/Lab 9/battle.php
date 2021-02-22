<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert a superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Record a Battle</h2>
    <p><a href="index.php">Return Home</a></p>
</header>
<main>
    <form action="insertBattle.php" method="POST">
        <p>Select the superhero that fought in this battle</p><select name="superhero">
        <?php
        include("db_connect.php");
        $sql_query = "SELECT * FROM superheros";
        $result = $db->query($sql_query);
        while($row = $result->fetch_array()){
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $superheroID = $row["superheroID"];
            echo "<option value = '{$superheroID}'>{$firstname} {$lastname} </option>";
        }
        ?>
        </select><br>
        <input type = "text" name = "villan" placeholder = "Villan Faught">
        <br>
        <input type="submit" value = "Submit">
    </form>
</main>
</body>
</html>
