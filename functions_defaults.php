<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions: Default Argument Values</title>
    </head>
    <body>
        <?php
            //set default argument value with assignment in function ($color="red")/($room="office", $color="red")
            function paint($room="office", $color="red") {
                return "The color of the {$room} is {$color}.<br />";
            }

            echo paint(); //with out a default value you have to pass a value through, even if just an empty string
            echo paint("bedroom","blue");
            echo paint("bedroom",null); //null is still a value, leaves that variable blank
            echo paint("bedroom");  //with just one value it will do second as default
            echo paint("blue"); /*can't get first default and put argument in for second (will always assing one value as first argument)
            make sure required values listed first in argument of function, optional/default values listed at end of argument list*/
        ?>
        <br />
        
    </body>
</html>