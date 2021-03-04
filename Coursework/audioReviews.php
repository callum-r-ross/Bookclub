<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <head>
        <h1>Audiobook Reviews</h1>
        <p><a href="index.php">Home</a></p>

        <?php
        include("connection.php");
        $sql = "SELECT * FROM bookReviews";
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

            echo "<article>
                        Title = {$bookTitle},
                        Author = {$authorFirst} {$authorLast},
                        Publisher = {$bookPublisher}
                        Genre = {$bookGenre},
                        Rating = {$bookRating},
                        Summary = {$bookSummary}
                        </article>";
        }
        ?>
        
    </head>
</body>
</html>