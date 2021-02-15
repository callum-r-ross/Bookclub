<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
    <?php 
    // Function for producing wante poster
    function productWantedPoster($personName, $specsQuantity,$mugsQuantity,$rollsQuantity){
        $award = 10 * ((($specsQuantity*$mugsQuantity*$rollsQuantity)*($specsQuantity*$mugsQuantity*$rollsQuantity))/2);

        echo "<p>Wanted: <strong>{$personName}</strong></p>";
        echo "<p>Known to be in possession of the following items:</p>";
        echo "<p>Specs: {$specsQuantity}</p>";
        echo "<p>Mugs: {$mugsQuantity}</p>";
        echo "<p>Sausage Rolls: {$rollsQuantity}</p>";
        echo "<p>Award for capture: £{$award}</p>";
        echo "<br>";
    }

    $name1 = "Bob";
    $name2 = "Dave";
    $name3 = "Keith";

    $mugs1 = "5";
    $mugs2 = "1";
    $mugs3 = "8";

    $specs1 = "10";
    $specs2 = "2";
    $specs3 = "9";

    $rolls1 = "3";
    $rolls2 = "5";
    $rolls3 = "9";

    productWantedPoster($name1,$mugs1,$specs1,$rolls1);
    productWantedPoster($name2,$mugs2,$specs2,$rolls2);
    productWantedPoster($name3,$mugs3,$specs3,$rolls3);
    ?>
</body>
</html>