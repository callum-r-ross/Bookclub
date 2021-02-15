<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Login Form without Session</title>
</head>
<body>
    <h1>PHP Login Form without Session</h1>
    <div class = "loginBox">
        <h3>Login Form</h3>
        <br><br>
        <form action = "login.php" method = "POST">
            <div>
                <label for="username">Username</label>
                <input type = "text" name = "username" placeholder = "username">
            </div>
            <div>
                <label for = "password">Password</label>
                <input type ="password" name = "password" placeholder = "password">
            </div>
            <div>
                <input type = "submit" name = "submit" value = "Login">
            </div>
        </form>
        <div class = "error"><?php echo $error; ?> <?php echo $username; echo $password;?></div>
    </div>
</body>
</html>