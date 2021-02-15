<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <form action ="<?php echo $_SERVER['PHP_SELF']; ?>"
    method="post">
        <label>Name</label>
        <input type="text" name="name">
        <label>Age</label>
        <input type="text" name="age">
       <p><input type="submit" value = "What can I buy"></p>
    </form>
    
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST["name"];
        $age = $_POST["age"];
        if ($age >= 21){
        echo "Hello {$name} you can buy specs, mugs and sausage rolls.";
        }
        else if ($age >= 18){
        echo "Hello {$name}, you can buy specs and mugs.";
        }
        else if($age >= 16){
        echo "Hello {$name}, you can buy specs.";
        }
        else {
        echo "Hello {$name}, you cant buy anything";
         }   
    }
    ?>
</body>
</html>