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
  
        // Populate array with correct items
        $itemArray = array();
        for($i =1; $i <= 30; $i++){
            if($i%2 != 0 && $i%3 != 0 && $i%4 != 0){
                $itemArray[$i] = "{$array[$i]} no products are available";
            } 
            else if($i%2 == 0 && $i%3 != 0 && $i%4 != 0){
                $itemArray[$i] = "{$array[$i]} specs are available";
            }
            else if($i%2 != 0 && $i%3 == 0 && $i%4 != 0){
                $itemArray[$i] = "{$array[$i]} mugs are available";
            }
            else if($i%2 == 0 && $i%3 != 0 && $i%4 == 0){
                $itemArray[$i] = "{$array[$i]} specs and sausage rolls are available";
            }
            else if($i%2 == 0 && $i%3 == 0 && $i%4 != 0){
                $itemArray[$i] = "{$array[$i]} specs and mugs are available";
            }
        }

        // Output each item of array on a new line
        foreach($itemArray as $x){
            echo "<p>$x</p>";
        }
        echo $itemArray[0];
    ?>
</body>
</html>
