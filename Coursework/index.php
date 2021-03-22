<?php
session_start();
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


<!--Main starts here-->
<main>
<h2 class="text-center">Book club</h2>
    <div class="d-flex">
    <div class="p-2">      
        <img src="style/bookClb.jpg" alt="book club book cover">
        </div>
        <div class="p-2">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Morbi tristique senectus et netus et malesuada fames ac turpis. Aenean pharetra magna ac placerat.</p>
        <p><a href="book-club.php">Enter the book club here!</a> (Must be signed in to enter)</p>
    </div>
    </div>
    <!--Reviews Section-->
    <section>
        <h2 class="text-center">Check some of our most popular book reviews below!</h2>
        <p class='text-center'><a href="review.php">Leave a review here</a></p>

        <h3>The Giver of Stars <small class="text-muted">by Jojo Moyes</small></h3>
        <div class="d-flex mb-3">
            <div class="p-2">
            <img src = 'uploads/87.jpg' class='img2' width='170' height='170'>
                     </div>
                     <div class='p-2'>
                      <p>Publisher: Penguin</p> <p>Genre: fiction</p><p>Review Rating: 5 stars</p>
                      <hr>
                      <p>I believe that this could truly be one of the best, if not the best book I have read. It transported me to the mountains, it took me into the small town and I felt like I was involved in a western film! A remarkable departure from previous material. </p>
                      </div>
                      </div>
                      <hr>

                      <h3>The Dinosaur that Pooped a Pirate <small class="text-muted">by Tom Fletcher</small></h3>
        <div class="d-flex mb-3">
            <div class="p-2">
            <img src = 'uploads/70.jpg' class='img2' width='170' height='170'>
                     </div>
                     <div class='p-2'>
                      <p>Publisher: Red Fox</p> <p>Genre: children</p><p>Review Rating: 5 stars</p>
                      <hr>
                      <p>I really like reading this series to my son and he loves them.</p>
                      </div>
                      </div>
                      <hr>
                    
                      <h3>How to Code: A Step-By-Step Guide to Computer Coding <small class="text-muted">by Max Wainewright</small></h3>
        <div class="d-flex mb-3">
            <div class="p-2">
            <img src = 'uploads/90.jpg' class='img2' width='170' height='170'>
                     </div>
                     <div class='p-2'>
                      <p>Publisher: Sterling Children's Books</p> <p>Genre: educational</p><p>Review Rating: 5 stars</p>
                      <hr>
                      <p>This book is a wonderful introduction to program for older elementary and middle school kids. It covers Logo, Scratch, Python, HTML, and JavaScript in a fun and accessible way. </p>
                      </div>
                      </div>
    </section>

    <!--About us-->
    <section>
        <h2 class="text-center">About us</h2>
        <p>Libero id faucibus nisl tincidunt eget nullam non nisi. Ornare arcu odio ut sem. Purus ut faucibus pulvinar elementum integer enim. Dolor magna eget est lorem ipsum dolor sit amet consectetur. Ultrices vitae auctor eu augue. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eleifend donec pretium vulputate sapien nec sagittis. Platea dictumst quisque sagittis purus sit amet volutpat consequat.</p>
    </section>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>