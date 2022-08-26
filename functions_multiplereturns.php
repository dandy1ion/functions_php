<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions: Multiple Returns</title>
    </head>
    <body>
        <?php
            /*function add_subt($val1, $val2) {
                $add = $val1 + $val2;
                $subt = $val1 - $val2;
                return $add;        //but how can we return $subt too?
            }

            $result = add_subt(10,5);
            echo $result;*/

            function add_subt($val1, $val2) {
                $add = $val1 + $val2;
                $subt = $val1 - $val2;
                return array($add, $subt);       //use array to return both results (very flexible, can do an unlimited amount of values)
            }

            $result_array = add_subt(10,5);
            //concatenate to echo each result out of the array
            echo "Add: " . $result_array[0] . "<br />";
            echo "Subt: " . $result_array[1] . "<br />";

            //use list function to assign array values to variables
            list($add_result, $subt_result) = add_subt(20,7);
            //concatenate to echo each result out of the array
            echo "Add: " . $add_result . "<br />";
            echo "Subt: " . $subt_result . "<br />";
        ?>
        <br />
        
    </body>
</html>