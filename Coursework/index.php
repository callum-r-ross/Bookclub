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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!--Header start here-->
    <header>
        <!--Logo and Title-->
        <h1>Online Book Club</h1>
        <img src="images/logo.png" alt="site logo" id="logo">
        <!--Sign up/log in-->
        
        <!--Search bar-->
        <div>
            <form id="searchBar">
                <input type ="search" id="search" name="search" placeholder="Search..">
                <input type="submit" value="Search">
            </form>
        </div>
        <!--Nav bar-->
        <nav>
            <ul>
                <li><a href="ficReviews.html">Fiction Reviews</a></li>
                <li><a href="nonFicReview.html">Non-Fiction Reviews</a></li>
                <li><a href="childReviews.html">Children Reviews</a></li>
                <li><a href="learnReviews.html">Learning section Reviews</a></li>
                <li><a href="popReviews.html">Popular Book Reviews</a></li>
                <li><a href="audioReviews.html">Audiobook Reviews</a></li>
            </ul>
        </nav>
    </header>

    <!--Main starts here-->
    <main>
        <?php if(!isSet($_SESSION["username"])){
            echo "<p><a href='login.html'>Login/Register</a></p>";
        } else {
            echo "Hello {$username}";
        }
        echo "<p><a href='logout.php'>Log out</a></p>";
        ?>
        <!--Book club Section-->
        <section>
            <h2>Book club</h2>
            <img src="images/bookClb.jpg" alt="book club book cover">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Netus et malesuada fames ac turpis egestas maecenas pharetra convallis. Morbi tristique senectus et netus et malesuada fames ac turpis. Aenean pharetra magna ac placerat.</p>
            <p><a href="#">Enter the book club here!</a></p>
        </section>

        <!--Reviews Section-->
        <section>
            <h2>Reviews</h2>
        </section>

        <!--About us-->
        <section>
            <h2>About us</h2>
            <p>Libero id faucibus nisl tincidunt eget nullam non nisi. Ornare arcu odio ut sem. Purus ut faucibus pulvinar elementum integer enim. Dolor magna eget est lorem ipsum dolor sit amet consectetur. Ultrices vitae auctor eu augue. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Eleifend donec pretium vulputate sapien nec sagittis. Platea dictumst quisque sagittis purus sit amet volutpat consequat.</p>
        </section>
    </main>

    <!--Footer starts here-->
    <footer>
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </footer>
</body>
</html>