<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Functions: Return Values</title>
    </head>
    <body>
        <?php
            //two arguments added together and assigned to variable (best practice = always have a return)
            function add($val1, $val2) {
                $sum = $val1 + $val2;
                return $sum;
                //echo $sum; will return value but not flexible for returning the math so we can work with it 
            }
            //call function
            $result1 = add(3,4);
            //able to further manipulate result
            $result2 = add(5,$result1);
            //variable $result1/2 capture the return of $sum
            echo $result1;
            echo "<br />";
            echo $result2;
            //echo $sum; do it here and it brings up an error of undefined variable ($sum has local scope in function)
        ?>
        <br />
        <?php
            //Chinese Zodiac as a function
            function chinese_zodiac($year) {
                switch(($year - 4) % 12) {//calculation checks for the remainder (ex: 0=1st year of 12year   cycle=year of the Rat.)
                    case  0: return 'Rat';
                    case  1: return 'Ox';
                    case  2: return 'Tiger';
                    case  3: return 'Rabbit';
                    case  4: return 'Dragon';
                    case  5: return 'Snake';
                    case  6: return 'Horse';
                    case  7: return 'Goat';
                    case  8: return 'Monkey';
                    case  9: return 'Rooster';
                    case 10: return 'Dog';
                    case 11: return 'Pig';
                }
            }
            
            $zodiac = chinese_zodiac(2013);
            echo "2013 is the year of the {$zodiac}.<br />";

            //instead of a variable can concatenate
            echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";
        ?>
        <br />
        <?php
        //leave echo statements out of function and instead use return
            function better_hello($greeting, $target, $punct) {
                return $greeting . " " . $target . $punct . "<br />";
            }
            //more flexibility to work with return
            echo better_hello("Hello", "John Doe", "!");
        ?>
        
    </body>
</html>