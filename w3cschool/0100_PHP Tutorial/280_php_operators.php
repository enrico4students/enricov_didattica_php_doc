<?php
// https://www.w3schools.com/php/php_magic_constants.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}


nl();
// **	Exponentiation	$x ** $y	Result of raising $x to the $y'th power	
$x = 10;  
$y = 3;
echo $x ** $y; nl();


nl();
/* PHP Assignment Operators
The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

Assignment	Same as...	Description	Try it
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus 
*/

$x = 10;
$x /= 5;

echo $x;


$x = 15;
$x %= 4;

echo $x;

nl();
/* PHP Comparison Operators
The PHP comparison operators are used to compare two values (number or string):

Operator	Name	Example	Result	Try it
==	Equal	$x == $y	Returns true if $x is equal to $y	
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type	
!=	Not equal	$x != $y	Returns true if $x is not equal to $y	
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y	
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type	
>	Greater than	$x > $y	Returns true if $x is greater than $y	
<	Less than	$x < $y	Returns true if $x is less than $y	
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y	
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y	
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
*/

// ==	Equal	$x == $y	Returns true if $x is equal to $y
$x = 100;  
$y = "100";
var_dump($x == $y);

// EV added
echo '3 ==  "3" ' . (3 == "3"); nl();
echo '3 == "03" ' . (3 == "03"); nl();



// ===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type
$x = 100;  
$y = "100";
echo '$x === $y ' . ($x === $y); nl(); // returns false because types are not equal
// EV added
$z = 100;
var_dump($x === $z); // returns false because types are not equal

$x = 100;  
$y = "100";
// <>	Not equal	$x <> $y	Returns true if $x is not equal to $y
var_dump($x <> $y); // returns false because values are equal

// !==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal


// <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, 
// depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
nl();

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
nl();

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
nl();




nl();
/* PHP Increment / Decrement Operators
The PHP increment operators are used to increment a variable's value.

The PHP decrement operators are used to decrement a variable's value.

Operator	Same as...	Description	Try it
++$x	Pre-increment	Increments $x by one, then returns $x	
$x++	Post-increment	Returns $x, then increments $x by one	
--$x	Pre-decrement	Decrements $x by one, then returns $x	
$x--	Post-decrement	Returns $x, then decrements $x by one
*/
$x = 10;  
echo ++$x; nl();

$x = 10;  
echo $x++; nl();




nl();
/* PHP Logical Operators
The PHP logical operators are used to combine conditional statements.

Operator	Name	Example	Result	Try it
and	And	$x and $y	True if both $x and $y are true	
or	Or	$x or $y	True if either $x or $y is true	
xor	Xor	$x xor $y	True if either $x or $y is true, but not both	
&&	And	$x && $y	True if both $x and $y are true	
||	Or	$x || $y	True if either $x or $y is true	
!	Not	!$x	True if $x is not true
*/





nl();
/* PHP String Operators
PHP has two operators that are specially designed for strings.

Operator	Name	Example	Result	Try it
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2	
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1
*/
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;


nl();
/* PHP Array Operators
The PHP array operators are used to compare arrays.

Operator	Name	Example	Result	Try it
+	Union	$x + $y	Union of $x and $y	
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs	
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types
!=	Inequality	$x != $y	Returns true if $x is not equal to $y	
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y	
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y	
*/

// +	Union	$x + $y	Union of $x and $y	
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y


nl();
// 
// EV added
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "red", "b" => "green"); 
$z = array("b" => "green", "a" => "red"); 
var_dump($x !== $y);
var_dump($x !== $z);





nl();
/* PHP Conditional Assignment Operators
The PHP conditional assignment operators are used to set a value depending on conditions:

?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	

??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7
*/


// ?:	Ternary	$x = expr1 ? expr2 : expr3
// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
//echo("<br>");
nl();

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";


// ??	Null coalescing	$x = expr1 ?? expr2
// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";
// echo("<br>");
nl();

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";
nl();
