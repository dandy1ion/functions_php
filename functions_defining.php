<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions: Defining</title>
    </head>
    <body>
        <?php //nothing gets output when you define your function (php takes code and stores it to call later)
            function say_hello() {
                echo "Hello World!<br />";
            }
            //call function, always have paranthesis
            say_hello();

            //add argument as a variable
            function say_hello_to($word) {
                echo "Hello {$word}!<br />";
            }
            //call function with argument inserted for variable, gives flexibility
            say_hello_to("World");
            say_hello_to("Everyone");
            //can't call function that has not been defined = doesn't exist (Fatal Error!)
            say_hello_loudly();
            /*can define function after calling it, php preprocess' page to find all defined functions first
            Still good practice to define first and call second for ease of reading code*/
            function say_hello_loudly() {
                echo "HELLO WORLD!<br />";
            }
            /*once defined a function can not be redefined (Fatal Error!)
            function say_hello_loudly() {
                echo "We can't redefine a function. <br />";
            }*/
        ?>
        <br />
    </body>
</html>