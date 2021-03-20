<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">

<!--Header start here-->
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
        <h1>Educational Book Reviews</h1>
        <?php
       include("connection.php");
       $sql = "SELECT * FROM bookReviews WHERE bookGenre = 'educational'";
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
                     <div class='d-flex mb-3'>
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>