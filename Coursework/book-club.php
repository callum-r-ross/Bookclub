<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
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
</header>

<!--Nav bar begins-->
<nav class="navbar navbar-expand-md navbar-light" style="background-colour: red">
   <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#toggleMobileMenu"
      aria-controls="toggleMobileMenu"
      aria-expand="false"
      aria-label="Toggle navigation"
   >
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="toggleMobileMenu">
      <ul class="navbar-nav text-center">
        <li><a class="nav-link" href="fiction.php">Fiction Reviews</a></li>
        <li><a class="nav-link" href="non-fiction.php">Non-Fiction Reviews</a></li>
        <li><a class="nav-link" href="children.php">Children Reviews</a></li>
        <li><a class="nav-link" href="educational.php">Educational Reviews</a></li>
        <li><a class="nav-link" href="audiobook.php">Audiobook Reviews</a></li>
      </ul>
   </div>
</nav>
<!--Nav bar ends-->

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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>