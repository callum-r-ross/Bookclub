<?php
session_start();
include("checkLogin.php");
checkLogin($_SESSION['username']);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">

<!--Header start here-->
<head>
    <meta charset="UTF-8">
    <title>Callum Ross</title>
    <meta name="My webpage for CMM007 CW" content="Book review app">
    <meta name="Callum Ross">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
    
<!--Header start here-->
<header>
<nav class="navbar navbar-custom navbar-expand-md  navbar-light" style="background-colour: red">
<a href="index.php"><img src="style/logo.png" alt="website logo" height="80" class="mb-2"></a>
<a class="navbar-brand">Online Book Club</a>

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
   <div class="collapse navbar-collapse ms-auto" id="toggleMobileMenu">
      <ul class="navbar-nav text-center">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Book Reviews
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item"><a class="nav-link" href="fiction.php">Fiction Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="non-fiction.php">Non-Fiction Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="children.php">Children Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="educational.php">Educational Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="audiobook.php">Audiobook Reviews</a></li>
          </ul>
        </li>
        
        <li><a class="nav-link" href="book-club.php">Book club</a></li>

        <li class="nav-item ms-auto"><form action="searchBar.php" method="POST" class="d-flex me-auto">
        <input type ="text" id="searchTerm" name="searchTerm" placeholder="Search for book title.." class="form-control me-2">
        <input type="submit" value="Search">
        </form></li>
      </ul>
      <span class="navbar-text ms-auto">
      <?php 
        if(!isSet($_SESSION["username"])){
            echo "<p class='me-2 mt-3'><a href='login.html'>Login/Register</a></p>";
        } else {
            echo "<p class='me-2 mt-3'><a href='logout.php'>Log out</a></p>";
        }
    ?>
    </span>
   </div>
</nav>

</header>
<!--Main begins-->
<main>
    <h1>Welcome to the Book Club!</h1>
    <h2>Book of the week </h2>
<div class="d-flex">
    <div class="p-2">
    
    <img src="style/warnP.jpeg" alt="book club book">
    </div>
    <div class="p-2">
    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.

        At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es. Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica.</p>
    </div>
    </div>
</main>
<br>
<?php
session_start();
if($_SESSION['username'] == "admin"){
    echo "<form action='removePost.php' method='POST' class='mb-3'>
                <label for='deletePost'>Enter postID of post to be deleted</label>
                <input type='text' name='deletePost' id='deletePost'>
                <input type='submit' value='submit'>
            </form>";
}
include("connection.php");
$sql = "SELECT * FROM bookClub";
$result = $db->query($sql);
while($row = $result->fetch_array()){
    $bookClubPost = $row['bookClubPost'];
    $user = $row['username'];
    $post = $row['postID'];
    echo "<div class='border'>
    <p>User {$user} says...</p>
    <p>{$bookClubPost}</p>
    <p>Post ID: {$post}</p>
    </div>
    <br>";
}
?>

<div class="text-center" style="margin:auto;">
<form action="addClubPost.php" method=POST style="max-width: 480px margin:auto;">
        <label for="bookClubPost" class="mb-3">Have your say!</label>
        <input type="text" id="bookClubPost" name="bookClubPost" class="form-control" required autofocus>
            
</input>

    <div class="mt-3">
                <button class="btn btn-lg btn-block btn-primary mb-2">Submit</button>
            </div>
</form>
</div>
<!--Footer starts-->
<footer>
    <hr>
    <p class='text-center'>Find us on</p>
    <div class="d-flex justify-content-center">
        <div class="p-2">        
            <a href="#"><img src="style/fb.png" alt="facebook footer icon" height="60"></a>
        </div>

        <div class="p-2">
            <a href="#"><img src="style/twit.png" alt="twitter footer icon" height="60"></a>
        </div>

        <div class="p-2">
            <a href="#"><img src="style/insta.png" alt="instagram footer icon" height="60"></a>
        </div>
    </div>
    <p class='text-center'>Created by Callum Ross &#169</p>
</footer>
<!--Footer ends-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>