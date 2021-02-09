<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'GET' ){
        ?>
        <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <label for="firstname">Firstname:</label>
                <input type = "text" name="firstname" id="firstname">
            </div>
            <div>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div>
                <label for="gender">Gender:</label>
                <input type="text" name="gender" id="gender">
            </div>
            <div>
                <label for="superpower">Main power:</label>
                <input type="text" name="superpower" id="superpower">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    <?php
    }
    elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $superpower = $_POST["superpower"];

        echo "<p>Name = {$firstname} {$lastname}</p>";
        echo "<p>Gender = {$gender}</p>";
        echo "<p>Superpower = {$superpower}</p>";
    }
    ?>
</body>
</html>