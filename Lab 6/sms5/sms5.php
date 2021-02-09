<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <?php 
    //Populate array with correct ordinal
    $array = array();
    for($i = 1; $i <= 30; $i++){
            $ten= $i%10;
            $hundred=$i%100;
            if($ten == 1 && $hundred != 11){
                $array[$i] = "On the {$i}st of the month";
            }
           elseif($ten == 2 && $hundred != 12){
                $array[$i] = "On the {$i}nd of the month";
            }
            elseif($ten == 3 && $hundred != 13){
                    $array[$i] = "On the {$i}rd of the month";
            }
          else{
                    $array[$i] = "On the {$i}th of the month";
            }          
        }

        // Set number of items
        $mugs = 7;
        $specs = 7;
        $rolls = 7;
        $randArray = array();

        //  Stay in loop until either item is not above 0 
        $count = 1;
        do{
            $todaysGood = rand(0,2);
            switch($todaysGood){
                case 0:
                    $randArray[$count] = "{$array[$count]} specs are available";
                    $specs--;
                    $count++;
                    break;
                case 1:
                    $randArray[$count]  = "{$array[$count]} mugs are available";
                    $mugs--;
                    $count++;
                    break;
                case 2:
                    $randArray[$count] = "{$array[$count]} sausage rolls are available";
                    $rolls--;
                    $count++;
                    break;
            }
        } 
        while($rolls > 0 && $specs > 0 && $mugs > 0);

        // Display array
        foreach($randArray as $x){
            echo "<p>$x</p>";
        }
        // Add on last line
        echo "<p><strong>No more goods are available this month</p></strong>";
    ?>
</body>
</html>