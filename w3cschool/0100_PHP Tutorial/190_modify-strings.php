<?php

// Upper Case
$x = "Hello World!";
echo strtoupper($x);

// Lower Case
$x = "Hello World!";
echo strtolower($x);


/* Replace String
The PHP str_replace() function replaces some characters with some other characters in a string.
Example
Replace the text "World" with "Dolly":
*/

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);




/* Reverse a String
The PHP strrev() function reverses a string.
Example
Reverse the string "Hello World!":
*/
echo "\n";
$x = "Hello World!";
echo strrev($x);



echo "\n";
/* Remove Whitespace
Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
Example
The trim() removes any whitespace from the beginning or the end:
*/
$x = " Hello World! ";
echo "'" . trim($x) . "'";





echo "\n";
/* Convert String into Array
The PHP explode() function splits a string into an array.

The first parameter of the explode() function represents the "separator". 
The "separator" specifies where to split the string.
Note: The separator is required.

Example
Split the string into an array. Use the space character as separator:
*/
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/





echo "\n";
/*
*/




echo "\n";
/*
*/





echo "\n";
/*
*/






echo "\n";
/*
*/





echo "\n";
/*
*/
