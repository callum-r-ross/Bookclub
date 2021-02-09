<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <?php 
    // Populate array and sort
    $peopleInDraw = array("Callow","Callum","Lewis","John","Michael","Steven","Joe","Paul","Dr Massie","Dr Ines","Kit","Marko","Dave");
    
    $count = 0;

    // While loop for 3 iterations
    while($count < 3){
        // Array sorted each iteration 
        sort($peopleInDraw);
        $randomDraw = rand(0,count($peopleInDraw)-1);
        
        $winner = strtoupper($peopleInDraw[$randomDraw]);

        unset($peopleInDraw[$randomDraw]);

        // Switch statement for choosing the prize won
        switch($count){
            case 0:
                echo "<p>$winner, you have won the SPECS</p>";
                break;
            case 1:
                echo "<p>$winner, you have won the MUGS</p>";
                break;
            case 2:
                echo "<p>$winner, you have won the SAUSAGE ROLLS</p>";
                break;
        }
        

        $count++;
    }

    ?>
</body>
</html>