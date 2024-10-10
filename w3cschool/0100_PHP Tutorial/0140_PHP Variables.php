<?php

/* Creating (Declaring) PHP Variables
In PHP, a variable starts with the $ sign, followed by the name of the variable:
*/
$x = 5;
$y = "John";



/* Rules for PHP variables:
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) 

*/


/* Output Variables
The PHP echo statement is often used to output data to the screen.
The following example will show how to output text and a variable: */

$txt = "W3Schools.com";
echo "I love $txt!" . "\n";




// The following example will produce the same output as the example above:
$txt = "W3Schools.com";
echo "I love " . $txt . "!" . "\n";


// The following example will output the sum of two variables:
$x = 5;
$y = 4;
echo $x + $y . "\n";
echo "\$x + \$y = " . $x + $y;





/* Variable Types
PHP has no command for declaring a variable, 
and the data type depends on the value of the variable. 
*/
$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x . "\n";
echo $y . "\n";





/* Get the Type
To get the data type of a variable, use the var_dump() function.
*/
$x = 5;
var_dump($x);


echo "\nvar_dump(5);\n";
var_dump(5);

echo "\nvar_dump(\"John\");\n";
var_dump("John");

echo "\nvar_dump(3.14);\n";
var_dump(3.14);

echo "\nvar_dump(true);\n";
var_dump(true);

echo "\nvar_dump([2, 3, 56]);\n";
var_dump([2, 3, 56]);

echo "\nvar_dump(NULL);\n";
var_dump(NULL);





$x = "John";
echo $x;





/* Assign Multiple Values
You can assign the same value to multiple variables in one line:

Example
All three variables get the value "Fruit": */

$x = $y = $z = "Fruit";
echo("$x $y $z");





