<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
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

<main>
    <h1>Audiobook Reviews</h1>
    <p><a href="index.php">Home</a></p>

        <?php
        include("displayGenre.php");
        displayGenre("audio");
    ?>
</main>
</div>
</body>
</html>