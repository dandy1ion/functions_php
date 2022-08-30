<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions</title>
    </head>
    <body>
        Part 1:
        <br />
        <?php
            //define function
            function hello() {
                echo "Hello World!<br />";
            }
            //call function
            hello();
        ?>
        <br />
        <br />
        Part 2:
        <br />
        <?php
            //define function to calculate area of rectangle
            function rec_area($length, $width) {
                $area = $length * $width;
                return "A rectangle of length {$length} and width {$width} has an area of {$area}.";
            }
            //assign variable to return and output
            $result = rec_area(4,12);
            echo $result;    
        ?>
        <br />
        <br />
        Part 3:
        <br />
        <?php
            //create a table with a function that has default values
            function table($blue="indigo", $red="scarlet", $yellow="sunflower", $green="sage") {
                echo "<table border =\"1\" style='border-collapse: collapse'>";
                for ($row=1; $row = 1; $row++) {
                    echo "<tr> \n";
                for ($col=1; $col <= 4; $col++) {
                    echo "<td>$blue</td> \n"; 
                    echo "<td>$red</td> \n"; 
                    echo "<td>$yellow</td> \n"; 
                    echo "<td>$green</td> \n"; break;
                }
                    echo "</tr>";
                    break;
                }
                echo "</table>";
            }
            //default values shown
            echo table();
            //inserted values shown
            echo table("sapphire", "blush", "lemon", "seafoam");
        ?>
        <br />
        <br />
        Part 4:
        <br />
        <?php
            //define function that accepts a variable
            function hello_beauty($devine) {
                echo "Hello {$devine}!<br />";
            }
            //call function
            hello_beauty("beautiful");

            //define function that passes output to another function
            function rec_area_hello($length, $width) {
                $area = $length * $width;
                return hello_beauty($area);
            }
            //show return value in previous functions output
            echo rec_area_hello(4,12);
        ?>
        <br />
        <br />
        Part 5:
        <br />
        <?php
            //take family names and birth year to output what current age that individual would be today
            function family_history($firstName, $famName, $birthYear) {
                $currentYear = date("Y");
                $age = $currentYear - $birthYear;
                echo "$firstName $famName born in $birthYear would be $age now.";
            }
            //call function with values
            family_history("Gene", "Johnson", "1949");
        ?>
        
    </body>
</html>