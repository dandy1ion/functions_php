<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions: Arguments</title>
    </head>
    <body>
        <?php
            
            function say_hello_to($word) {
                echo "Hello {$word}!<br />";
            }
            /*call function with argument inserted for variable, gives flexibility*/
            say_hello_to("Everyone");
            /*call funcion with argument of another variable for variable in function*/
            $name = "John Doe";
            say_hello_to($name);    
        ?>
        <br />
        <?php
           function better_hello($greeting, $target, $punct) {
                echo $greeting . " " . $target . $punct . "<br />";
           }
           //order of arguments must be same and number of arguments must match
           better_hello("Hello", $name, "!");
           better_hello("Greetings", $name, "!!!");
           //can provide value to argument as null
           better_hello("Greetings", $name, null);
        ?>
    </body>
</html>