<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <form action ="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="post">
        <label>Wanted good</label>
        <input type="text" name="wantedgoods">
       <p><input type="submit" value = "What can I buy"></p>
    </form>
    
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $wantedgoods = $_POST["wantedgoods"];
        switch($wantedgoods){
            case "mugs":
                echo "You have to be 18 or over to buy mugs";
                break;
            case "specs":
                echo "You have to be 16 or over to buy specs";
                break;
            case "sausage rolls":
                echo "You have to be 21 or over to buy sausage rolls";
        } 
    }
    ?>
</body>
</html>