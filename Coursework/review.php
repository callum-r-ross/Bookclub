<?php
session_start();
include("checkLogin.php");
checkLogin($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
<header>
    <!--Logo and Title-->
    <h1>Online Book Club</h1>
    <img src="style/logo.png" alt="site logo" id="logo">
</header>
<main>
    <div>
        <form action="registerBook.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="bookTitle" class="sr-only">Title</label>
                <input type="text" name="bookTitle" id="bookTitle">
            </div>
            <div>
                <label for="authorFirstName">Author first name</label>
                <input type="text" name="authorFirstName" id="authorFirstName">
            </div>
            <div>
                <label for="authorLastName">Author last name</label>
                <input type="text" name="authorLastName" id="authorLastName">
            </div>
            <div>
                <label for="bookPublisher">Publisher</label>
                <input type="text" name="bookPublisher" id="bookPublisher">
            </div>
            <div>
                <label for="bookGenre">Genre</label>
                <select  name="bookGenre" id="bookGenre">
                    <option value="fiction">Fiction</option>
                    <option value="non-fiction">Non-fiction</option>
                    <option value="children">Children's</option>
                    <option value="educational">Educational</option>
                    <option value="audio">Audiobook</option>
                </select>
            </div>
            <div>
                <label for="bookSummary">250 character summary</label>
                <textarea maxlength="250" name="bookSummary" id="bookSummary"></textarea>
            </div>
            <div>
                <p>Rating</p>
                <label for="rating1">1</label>
                <input type="radio" value="1" name="bookRating" id="rating1">

                <label for="rating2">2</label>
                <input type="radio" value="2" name="bookRating" id="rating2">

                <label for="rating3">3</label>
                <input type="radio" value="3" name="bookRating" id="rating3">

                <label for="rating4">4</label>
                <input type="radio" value="4" name="bookRating" id="rating4">

                <label for="rating5">5</label>
                <input type="radio" value="5" name="bookRating" id="rating5">
            </div>
            <div>
                <p>Recommend to a friend?</p>
                <label for="noRecommended">No</label>
                <input type="radio" value="0" name="bookRecommended" id="noRecommended">

                <label for="yesRecommended">Yes</label>
                <input type="radio" value="1" name="bookRecommended" id="yesRecommended">
            </div>
            <div>
                <input type="file" name="file">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</main>
</body>
</html>