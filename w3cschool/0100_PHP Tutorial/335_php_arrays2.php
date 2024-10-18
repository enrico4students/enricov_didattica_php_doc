<?php
// https://www.w3schools.com/php/php_arrays.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}

// Add one more item to the fruits array:

$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
var_dump($fruits);


// Associative Arrays
// To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";


// add multiple items to an existing array, use the array_push() function.

$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
var_dump($fruits);


// Add Multiple Items to Associative Arrays
// To add multiple items to an existing array, you can use the += operator.

$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];


// https://www.w3schools.com/php/php_arrays_remove.asp

// Remove Array Item
// To remove an existing item from an array, you can use the array_splice() function.
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

var_dump($cars);


// Using the unset Function
// You can also use the unset() function to delete existing array items.

// Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);


// Remove Multiple Array Items
// To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete.

// Remove 2 items, starting a the second item (index 1):

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
var_dump($cars);

// The unset() function takes a unlimited number of arguments, and can therefore be used to delete multiple array items:

// remove the firsr and the second item:

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);


// Remove Item From an Associative Array
// To remove items from an associative array, you can use the unset() function.

// Specify the key of the item you want to delete.

// Remove the "model":
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);


// Using the array_diff Function
// You can also use the array_diff() function to remove items from an associative array.

// This function returns a new array, without the specified items.
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);


// Remove the Last Item
// The array_pop() function removes the last item of an array.
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);

// Remove the First Item
// The array_shift() function removes the first item of an array.
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);


// https://www.w3schools.com/php/php_arrays_sort.asp


echo "\n---------- Fine ------------" . "\n";var_dump($cars);





