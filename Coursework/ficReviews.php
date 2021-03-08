<!DOCTYPE html>
<html>
<head>

</head>
<body>
<header>
    <!--Logo and Title-->
    <h1>Online Book Club</h1>
    <img src="style/logo.png" alt="site logo" id="logo">
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
            <li><a href="ficReviews.php">Fiction Reviews</a></li>
            <li><a href="nonFicReview.php">Non-Fiction Reviews</a></li>
            <li><a href="childReviews.php">Children Reviews</a></li>
            <li><a href="learnReviews.php">Learning section Reviews</a></li>
            <li><a href="audioReviews.php">Audiobook Reviews</a></li>
        </ul>
    </nav>
</header>
<main>
        <h1>Fiction Book</h1>
        <p><a href="index.php">Home</a></p>
        <?php
          include("connection.php");
          $sql = "SELECT * FROM bookReviews WHERE bookGenre = 'fiction'";
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
  
              echo "<article>
                          <p>Title = {$bookTitle}</p>
                          <p>Author = {$authorFirst} {$authorLast}</p>
                          <p>Publisher = {$bookPublisher}</p>
                          <p>Genre = {$bookGenre}</p>
                          <p>Rating = {$bookRating}</p>
                          <p>Summary = {$bookSummary}</p>
                          <img src='$bookCover'>
                          </article>";
          }
        ?>
</main>
</body>
</html>