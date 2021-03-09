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
        <form action="" method="POST">
            <input type ="text" id="searchTerm" name="searchTerm" placeholder="Search for Book or Author">
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
    <h1>Popular Book Reviews</h1>
    <p><a href="index.php">Home</a></p>
<?php
$searchTerm = $_POST['searchTerm'];
searchBar($searchTerm);
?>
</main>
</body>
</html>


<?php
function searchBar($searchTerm){
$servername = "localhost";
$dbname = "bookClub";
$password = "root";
$username ="root";
$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("SELECT *  FROM bookReviews WHERE bookID = ?");
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()){
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
                <img src = '$bookCover'>
                </article>";
}
$stmt->close();
}
?>