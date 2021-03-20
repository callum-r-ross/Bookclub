<?php
session_start();
include("checkLogin.php");
checkLogin($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
<header>
<nav class="navbar navbar-expand-md navbar-light mt-3" style="background-colour: red">
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
            echo "<p><a href='login.html'>Hello, Login/Register</a></p>";
        } else {
            echo "<p>Hello, {$username}</p>";
            echo "<p><a href='logout.php'>Log out</a></p>";
        }
    ?>
    </span>
   </div>
</nav>

</header>
<main>
    <div class="text-center mt-5" style="margin:auto;">

    <h1>Leave your review below!</h1>
        <form action="registerBook.php" method="POST" enctype="multipart/form-data" style="max-width: 480px; margin:auto;">

                <label for="bookTitle" class="sr-only">Title</label>
                <input type="text" name="bookTitle" id="bookTitle" class="form-control mt-2" required>

                <label for="authorFirstName">Author first name</label>
                <input type="text" name="authorFirstName" id="authorFirstName" class="form-control mt-2" required>

                <label for="authorLastName">Author last name</label>
                <input type="text" name="authorLastName" id="authorLastName" class="form-control mt-2" required>

                <label for="bookPublisher">Publisher</label>
                <input type="text" name="bookPublisher" id="bookPublisher" class="form-control mt-2" required>

                <label for="bookGenre">Genre</label>
                <select  name="bookGenre" id="bookGenre" class="form-control mt-2" required>
                    <option value="fiction">Fiction</option>
                    <option value="non-fiction">Non-fiction</option>
                    <option value="children">Children's</option>
                    <option value="educational">Educational</option>
                    <option value="audio">Audiobook</option>
                </select>

                <label for="bookSummary">250 character summary</label>
                <textarea maxlength="250" name="bookSummary" id="bookSummary" class="form-control mt-2" required></textarea>

                <p>Rating (optional)</p>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bookRating" id="rating1" value="1">
                <label class="form-check-label" for="rating1">1</label>
                </div>

                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bookRating" id="rating2" value="2">
                <label class="form-check-label" for="rating2">2</label>
                </div>

                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bookRating" id="rating3" value="3">
                <label class="form-check-label" for="rating3">3</label>
                </div>

                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bookRating" id="rating4" value="4">
                <label class="form-check-label" for="rating4">4</label>
                </div>

                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bookRating1" id="rating5" value="5">
                <label class="form-check-label" for="rating5">5</label>
                </div>
        
                

                <input type="file" name="file" class="form-control mt-2" required>

                <div class="mt-3">
                    <button class="btn btn-lg btn-block btn-primary mb-2">
                        Submit Review</button>
                </div>
        </form>
    </div>
</main>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>