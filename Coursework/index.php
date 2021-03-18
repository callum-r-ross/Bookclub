<?php
session_start();
if(empty($_SESSION["username"])){
    $username = "Sign in/up";
} else {
    $username = $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Callum Ross</title>
    <meta name="My webpage for CMM007 CW" content="Book review app">
    <meta name="Callum Ross">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
<!--Header start here-->
<header class="col-md-12">
    <h1>Online Book Club</h1>
    <img src="style/logo.png" alt="site logo" id="logo"> 
    <div>
        <form action="searchBar.php" method="POST">
            <input type ="text" id="searchTerm" name="searchTerm" placeholder="Search..">
            <input type="submit" value="Search">
        </form>
    </div>

    <?php 
if(!isSet($_SESSION["username"])){
    echo "<p><a href='login.html'>Hello, Login/Register</a></p>";
} else {
            echo "Hello, {$username}";
        }
echo "<p><a href='logout.php'>Log out</a></p>";
?>
</header>

<!--Nav bar-->
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
<!--/.Navbar-->

    

<!--Nav ends-->

<!--Header ends-->

<!--Main starts here-->
<main>
    <!--Book club Section-->
    <section>
        <h2>Book club</h2>
        <img src="style/bookClb.jpg" alt="book club book cover">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Morbi tristique senectus et netus et malesuada fames ac turpis. Aenean pharetra magna ac placerat.</p>
        <p><a href="book-club.php">Enter the book club here!</a></p>
    </section>

    <!--Reviews Section-->
    <section>
        <h2>Reviews</h2>
        <p><a href="review.php">Leave a review here</a></p>
    </section>

    <!--About us-->
    <section>
        <h2>About us</h2>
        <p>Libero id faucibus nisl tincidunt eget nullam non nisi. Ornare arcu odio ut sem. Purus ut faucibus pulvinar elementum integer enim. Dolor magna eget est lorem ipsum dolor sit amet consectetur. Ultrices vitae auctor eu augue. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eleifend donec pretium vulputate sapien nec sagittis. Platea dictumst quisque sagittis purus sit amet volutpat consequat.</p>
    </section>
</main>
<!--Main ends-->

<!--Footer starts here-->
<footer>
    <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
    </ul>
</footer>
<!--Footer ends-->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>