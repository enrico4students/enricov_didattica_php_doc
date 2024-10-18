<?php
// https://www.w3schools.com/php/php_functions.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}


// PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.



nl();
// Create a Function
// A user-defined function declaration starts with the keyword function, followed by the name of the function:
function myMessage() {
  echo "Hello world!";
}



// Call a Function
// To call the function, just write its name followed by parentheses ():
myMessage();




nl();
/* PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
*/
// The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name, e.g. ("Jani"), and the name is used inside the function, which outputs several different first names, but an equal last name:

function familyName($fname) {
  echo "$fname Refsnes.<br>\n";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


// The following example has a function with two arguments ($fname, $year):

function familyName2($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");






nl();
/* PHP Default Argument Value
The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
*/

function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);





nl();
/* PHP Functions - Returning values
To let a function return a value, use the return statement:
*/
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>\n";
echo "7 + 13 = " . sum(7, 13) . "<br>\n";
echo "2 + 4 = " . sum(2, 4);



nl();
/* Passing Arguments by Reference
In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
Use a pass-by-reference argument to update a variable:
*/
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;


/* Variable Number of Arguments
By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

The variadic function argument becomes an array.
*/

function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;


// EV added
function enricoVariadic(...$x) {

  foreach($x as $k => $v) {
    echo "$k => $v\n";
  }
}

enricoVariadic(1, "pippo", 2, "pluto","boh", "bah", 5, "cinque");



// The variadic argument must be the last argument:
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;



// If the variadic argument is not the last argument, you will get an error.
// function myFamily(...$firstname, $lastname) {}


// In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
// In the following example we try to send both a number and a string to the function without using strict:
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10


// To specify strict we need to set declare(strict_types=1);. 
// This must be on the very first line of the PHP file.

// declare(strict_types=1); // strict requirement

function addNumbers2(int $a, int $b) {
  return $a + $b;
}
echo addNumbers2(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown


// PHP Return Type Declarations
// PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.
// To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

// declare(strict_types=1); // strict requirement
function addNumbers3(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers3(1.2, 5.2);

// You can specify a different return type, than the argument types, but make sure the return is the correct type:
// declare(strict_types=1); // strict requirement
function addNumbers4(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers4(1.2, 5.2);
