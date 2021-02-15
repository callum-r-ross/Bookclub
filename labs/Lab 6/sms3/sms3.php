<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $provisionedActivities = array("Specs","Mugs","Sausage rolls");
        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }

        $provisionedActivities[1] = "Hugs";

        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }

        unset($provisionedActivities[2]);

        foreach($provisionedActivities as $x){
            print "<p>$x</p>";
        }
    ?>
</body>
</html>