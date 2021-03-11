<!DOCTYPE html>
<html>
<head>

</head>
<body>
<header>
    <!--Logo and Title-->
    <h1>Online Book Club</h1>
    <img src="style/logo.png" alt="site logo" id="logo">
    <!--Search bar-->
        <div>
            <form id="searchBar" action="searchBar.php" method="POST">
                <input type ="text" id="searchTerm" name="searchTerm" placeholder="Search..">
                <input type="submit" value="Search">
            </form>
        </div>
    <!--Nav bar-->
    <nav>
        <ul>
            <li><a href="fiction.php">Fiction Reviews</a></li>
            <li><a href="non-fiction.php">Non-Fiction Reviews</a></li>
            <li><a href="children.php">Children Reviews</a></li>
            <li><a href="educational.php">Learning section Reviews</a></li>
            <li><a href="audiobook.php">Audiobook Reviews</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Audiobook Reviews</h1>
    <p><a href="index.php">Home</a></p>

        <?php
        include("displayGenre.php");
        displayGenre("audio");
    ?>
</main>
</body>
</html>