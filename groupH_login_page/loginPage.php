<?php
// Resume session if already logged in
    session_start();
    if(IsSet($_SESSION["username"]))
    {
        // If username is set redirect to homepage
        header("Location: homePage.php");
        exit();
    }

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <header><h1>Welcome to the SwapApp</h1></header>

    <h2>The following username and password combinations work</h2>
    <ul>
        <li>Username = Baz, Password = letmein</li>
        <li>Username = Dave, Password = thekey</li>
        <li>Username = Keith, Password = password</li>
    </ul>

    <form action="loginCheck.php" method="POST" id="login">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username"> 
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>
</body>
</html>