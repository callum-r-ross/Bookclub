<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="displayForm.php" method="POST">
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
</body>
</html>