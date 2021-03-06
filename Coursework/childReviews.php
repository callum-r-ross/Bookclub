<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <header>
        <h1>Children Book Reviews</h1>
        <p><a href="index.php">Home</a></p>
        <?php
          include("connection.php");
          $sql = "SELECT * FROM bookReviews WHERE bookGenre = 'children'";
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
    </header>
</body>
</html>