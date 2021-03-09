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
            <li><a href="ficReviews.php">Fiction Reviews</a></li>
            <li><a href="nonFicReview.php">Non-Fiction Reviews</a></li>
            <li><a href="childReviews.php">Children Reviews</a></li>
            <li><a href="learnReviews.php">Learning section Reviews</a></li>
            <li><a href="audioReviews.php">Audiobook Reviews</a></li>
        </ul>
    </nav>
</header>
 <main>   
        <h1>Children Book Reviews</h1>
        <p><a href="index.php">Home</a></p>
        <?php
            include("displayGenre.php");
            displayGenre("children");
        ?>
</main> 
</body>
</html>