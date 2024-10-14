<?php
// https://www.w3schools.com/php/php_numbers.asp

const ENDL = "<br/>\n";

echo "<br/>\n";
/*
PHP Numbers
There are three main numeric types in PHP:
- Integer
- Float
- Number Strings

In addition, PHP has two more data types used for numbers:
- Infinity
- NaN
Variables of numeric types are created when you assign a value to them:
*/
$a = 5;
$b = 5.34;
$c = "25";

// To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);



echo "<br/>\n";
/* PHP Integers
PHP has the following predefined constants for integers:
- PHP_INT_MAX - The largest integer supported
- PHP_INT_MIN - The smallest integer supported
- PHP_INT_SIZE -  The size of an integer in bytes
*/
echo PHP_INT_MAX; # EV added








echo "<br/>\n";
/* PHP has the following functions to check if the type of a variable is integer:
- is_int()
- is_integer() - alias of is_int()
- is_long() - alias of is_int()
*/
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));





echo "<br/>\n";
/* PHP Floats
A float is a number with a decimal point or a number in exponential form.

2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.

The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.

PHP has the following predefined constants for floats (from PHP 7.2):

PHP_FLOAT_MAX - The largest representable floating point number
PHP_FLOAT_MIN - The smallest representable positive floating point number
PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
*/
# constant interpolation is not supported
# echo "\$PHP_FLOAT_EPSILON = $PHP_FLOAT_EPSILON"; # non funziona 
echo "\$PHP_FLOAT_EPSILON = " . PHP_FLOAT_EPSILON;  # funziona




echo "<br/>\n";
/* PHP has the following functions to check if the type of a variable is float:

is_float()
is_double() - alias of is_float()
Example
*/
$x = 10.365;
var_dump(is_float($x));





echo "<br/>\n";
/* PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()
However, the PHP var_dump() function returns the data type and value:

Example
Check if a numeric value is finite or infinite:
*/
$x = 1.9e411;
echo "\$x = $x is_infinite($x): " . is_infinite($x) . "<br/>\n"; # ewv added
var_dump($x);





echo ENDL;
/* PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
However, the PHP var_dump() function returns the data type and value:

Example
Invalid calculation will return a NaN value:
*/
echo "Invalid calculation will return a NaN value" . ENDL;
$x = acos(8);
var_dump($x);





echo ENDL;
/* PHP Numerical Strings
The PHP is_numeric() function can be used to find whether a variable is numeric. 
The function returns true if the variable is a number or a numeric string, false otherwise.

Example
Check if the variable is numeric:
*/ 
$x = 5985;
var_dump(is_numeric($x)); echo ENDL;

$x = "5985";
var_dump(is_numeric($x)); echo ENDL;
$x = "59.85" + 100;
var_dump(is_numeric($x)); echo ENDL;

$x = "Hello";
var_dump(is_numeric($x)); echo ENDL;





echo ENDL;
/* PHP Casting Strings and Floats to Integers
Sometimes you need to cast a numerical value into another data type.

The (int), (integer), and intval() functions are often used to convert a value to an integer.

Example
Cast float and string to integer:
*/ 
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
