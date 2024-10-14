<?php

// https://www.w3schools.com/php/php_string.asp

/* Strings
Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
*/
echo "Hello";
echo 'Hello';




/* Double or Single Quotes?
You can use double or single quotes, but you should be aware of the differences between the two.
Double quoted strings perform action on special characters.
E.g. when there is a variable in the string, it returns the value of the variable:
*/
$x = "John";
echo "Hello $x";





/* Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
*/
$x = "John";
echo 'Hello $x';




/* String Length
The PHP strlen() function returns the length of a string.
*/
echo strlen("Hello world!");




/* Word Count
The PHP str_word_count() function counts the number of words in a string.
*/
echo str_word_count("Hello world!");



/* Search For Text Within a String
The PHP strpos() function searches for a specific text within a string.
*/
echo strpos("Hello world!", "world");


