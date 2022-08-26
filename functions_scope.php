<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions: Scope</title>
    </head>
    <body>
        <?php
            $bar = "outside";       //global scope

            function foo() {
                global $bar;    //global key word will now reset echo 2: (use with caution; special cases only)
                if (isset($bar)) {
                    echo "foo: " . $bar . "<br />";     //still won't call because $bar inside is seen as a separate variable & is local so not set yet
                }
                $bar = "inside";    //local scope
            }

            echo "1: " . $bar . "<br />";
            foo();
            echo "2: " . $bar . "<br />";   //can't call from inside function = local scope (must use global keyword in function to be able to change the global variable)
        ?>
        <br />
        
    </body>
</html>