<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Non-fiction Book Reviews</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"  integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<!--Body starts-->
<body>
<div class="container">
    
<!--Navbar starts-->
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

            <li class="nav-item ms-auto">
                <form action="searchBar.php" method="POST" class="d-flex me-auto">
                    <input type ="text" id="searchTerm" name="searchTerm" placeholder="Search for book title.." class="form-control me-2">
                    <input type="submit" value="Search">
                </form>
            </li>

      </ul>

      <span class="navbar-text ms-auto">
      <?php 
      //Checks if user is logged in to display logout option
        if(!isSet($_SESSION["username"])){
            echo "<p class='me-2 mt-3'><a href='login.html'>Login/Register</a></p>";
        } else {
            echo "<p class='me-2 mt-3'><a href='logout.php'>Log out</a></p>";
        }
    ?>
    </span>
   </div>
</nav>
<!--Navbar ends-->

<!--Main starts-->
<main>
    <h1 class='text-center mt-3 mb-3'>Non-fiction Book Reviews</h1>
    <?php
        include("connection.php");
        $sql = "SELECT * FROM bookReviews WHERE bookGenre = 'non-fiction'";
        $result = $db->query($sql);
        while($row = $result->fetch_array()){
                    $bookTitle = $row["bookTitle"];
                    $bookPublisher = $row["bookPublisher"];
                    $bookSummary= $row["bookSummary"];
                    $bookRating = $row["bookRating"];
                    $bookRecommended = $row["bookRecommended"];
                    $bookGenre = $row["bookGenre"];
                    $authorFirst = $row["authorFirstName"];
                    $authorLast = $row["authorLastName"];
                    $bookID = $row["bookID"];
                    $bookCoverExt = $row["bookCover"];
                    $bookCover = "uploads/{$bookID}.{$bookCoverExt}";
                    echo "<h3>{$bookTitle} by {$authorFirst} {$authorLast}</h3>
                    <div class='d-flex mb-3 border'>
                    <div class='p-2'>
                    <img src = '$bookCover' class='img2 width='170' height='170'>
                    </div>
                    <div class='p-2'>
                     <p>Publisher: {$bookPublisher}</p> <p>Genre: {$bookGenre}</p><p>Review Rating: {$bookRating} stars</p>
                     <hr>
                     <p>{$bookSummary}</p>
                     </div>
                     </div>";
                    }
    ?>
</main>
<!--Main ends-->

<!--Footer starts-->
<footer class="footer-custom">
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
<!--JavaScript for Bootstrap 5-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!--Body ends-->
</body>
</html>