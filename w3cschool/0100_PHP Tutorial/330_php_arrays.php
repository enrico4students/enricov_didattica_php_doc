<?php
// https://www.w3schools.com/php/php_arrays.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}

// An array stores multiple values in one single variable:
$cars = array("Volvo", "BMW", "Toyota");


// What is an Array?
// An array is a special variable that can hold many values under a single name, 
// and you can access the values by referring to an index number or name.


/* PHP Array Types
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays 
*/




/* Array Items
Array items can be of any data type.
The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.
*/
// You can have different data types in the same array.
function myFunction() { 
    echo "This text comes from a function";
}
  
// create array:
$myArr = array("Volvo", 15, ["apples", "bananas"], "myFunction");

// Call the function stored in the array
call_user_func($myArr[3]);

nl();
/* esempio originale non funziona, è
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
*/
// EV added - funzioni per nome
$nomeFuzione = "myFunction";
$nomeFuzione(); nl();





nl();
/* Array Functions
The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
*/
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars); nl();






// https://www.w3schools.com/php/php_arrays_indexed.asp
/* In indexed arrays each item has an index number.
By default, the first item has index 0, the second item has item 1, etc.
*/
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars); nl();


// Access Indexed Arrays
// To access an array item you can refer to the index number.
// Display the first array item:
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];


// Change Value
// To change the value of an array item, use the index number:
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);


// Loop Through an Indexed Array
// To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}


// Index Number
// The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.

// New items get the next index number, meaning one higher than the highest existing index.
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
array_push($cars, "Ford");
var_dump($cars);




// https://www.w3schools.com/php/php_arrays_associative.asp

// Associative arrays are arrays that use named keys that you assign to them.
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);


// o access an array item you can refer to the key name.

// Display the model of the car:
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];


// To change the value of an array item, use the key name:

// Change the year item:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);



// https://www.w3schools.com/php/php_arrays_create.asp
$cars = array("Volvo", "BMW", "Toyota");

// You can also use a shorter syntax by using the [] brackets:
$cars = ["Volvo", "BMW", "Toyota"];


// Multiple Lines
// Line breaks are not important, so an array declaration can span multiple lines:

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];

// Trailing Comma
// A comma after the last item is allowed:
$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];


// indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:
$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

// Declare Empty Array
// You can declare an empty array first, and add items to it later:
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";



// he same goes for associative arrays, you can declare the array first, 
// and then add items to it:
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;


// Mixing Array Keys
// You can have arrays with both indexed and named keys:
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";






// https://www.w3schools.com/php/php_arrays_access.asp

// Access an item by referring to its index number:

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
// Note: The first item has index 0.


// To access items from an associative array, use the key name:

// Access an item by referring to its key name:
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

// Double or Single Quotes
// You can use both double and single quotes when accessing an array:
echo $cars["model"];
echo $cars['model'];


// Excecute a Function Item
// Array items can be of any data type, including function.
// To execute such a function, use the index number followed by parentheses ():

// Execute a function item:

function myFunction2() {
  echo "I come from a function!";
}
$myArr = array("Volvo", 15, "myFunction2");
$myArr[2]();


// Use the key name when the function is an item in a associative array:
// Execute function by referring to the key name:

// function myFunction() {
//   echo "I come from a function!";
// }
$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunction");
$myArr["message"]();



// Loop Through an Associative Array
// To loop through and print all the values of an associative array, you can use a foreach loop, like this:


// Display all array items, keys and values:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}


// Loop Through an Indexed Array
// To loop through and print all the values of an indexed array, you can use a foreach loop, like this:

// Display all array items:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}






// https://www.w3schools.com/php/php_arrays_update.asp

// ... cose ovvie saltate

// change ALL item values to "Ford":

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford"; nl();
}
unset($x);
var_dump($cars);



// Note: Remember to add the unset() function after the loop.
// Without the unset($x) function, the $x variable will remain as a reference to the last array item.

// Demonstrate the consequence of forgetting the unset() function:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford"; nl();
}

$x = "ice cream";

var_dump($cars);






echo "\n---------- Fine ------------" . "\n";




