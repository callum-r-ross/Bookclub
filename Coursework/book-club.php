<!DOCTYPE html>
<html>
<head>

</head>
<body>
<!--Header begins-->
<header>
    <!--Logo and Title-->
    <h1>Online Book Club</h1>
    <img src="style/logo.png" alt="site logo" id="logo">
    <!--Search bar-->
        <div>
            <form id="searchBar" action="searchBar.php" method="POST">
                <input type ="search" id="searchTerm" name="searchTerm" placeholder="Search..">
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
<!--Main begins-->
<main>
    <h1>Welcome to the Book Club!</h1>

    <h2>Book of the week </h2>
    <img src="style/warnP.jpeg" alt="book club book">
    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.

        At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica.</p>
</main>

<?php
session_start();
if($_SESSION['username'] == "admin"){
    echo "<form action='removePost.php' method='POST'>
                <label for='deletePost'>Enter postID of post to be deleted</label>
                <input type='text' name='deletePost' id='deletePost'>
                <input type='submit' value='submit'>
            </form>";
}
echo "<p><a href='index.php'>Home</a></p>";
include("connection.php");
$sql = "SELECT * FROM bookClub";
$result = $db->query($sql);
while($row = $result->fetch_array()){
    $bookClubPost = $row['bookClubPost'];
    $user = $row['username'];
    $post = $row['postID'];
    echo "<article>
                <p>{$post} {$user} - {$bookClubPost}</p>
                </article>";
}
?>
<footer>
    <form action="addClubPost.php" method=POST>
        <div>
            <label for="userPost">Have your say!</label>
            <textarea id="bookClubPost" name="bookClubPost"></textarea>
            <input type="submit" value="Submit">
        </div>
    </form>
</footer>
</body>
</html>