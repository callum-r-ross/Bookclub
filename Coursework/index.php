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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
<!--Header start here-->
<header class="col-md-12">
    <h1>Online Book Club</h1>
    <img src="style/logo.png" alt="site logo" id="logo"> 
</header>

<!--Nav bar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="rch" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

    <div>
        <form action="searchBar.php" method="POST">
            <input type ="text" id="searchTerm" name="searchTerm" placeholder="Search..">
            <input type="submit" value="Search">
        </form>
    </div>

<!--Nav ends-->

<!--Header ends-->

<!--Main starts here-->
<main>
<?php 
if(!isSet($_SESSION["username"])){
    echo "<p><a href='login.html'>Hello, Login/Register</a></p>";
} else {
            echo "Hello, {$username}";
        }
echo "<p><a href='logout.php'>Log out</a></p>";
?>
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

</body>
</html>