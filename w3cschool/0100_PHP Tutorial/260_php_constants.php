<?php
// https://www.w3schools.com/php/php_constants.asp

define("ENDL", "<br/>\n");
function nl() { echo ENDL;}

/* Create a PHP Constant
To create a constant, use the define() function.
define(name, value);
Parameters:
name: Specifies the name of the constant
value: Specifies the value of the constant
*/

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING; echo nl();


/* 
*/
echo nl();

/* PHP const Keyword
You can also create a constant by using the const keyword.
*/

// Create a case-sensitive constant with the const keyword:
const MYCAR = "Volvo";
echo MYCAR;


/* const vs. define()
const cannot be created inside another block scope, like inside a function or inside an if statement.
define can be created inside another block scope.
*/





/* PHP Constant Arrays
From PHP7, you can create an Array constant using the define() function.
*/

// Create an Array constant:
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0]; nl();
  

/* Constants are Global
  Constants are automatically global and can be used across the entire script.
*/

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
myTest();


// EV added

function myTest2() {
    define("GREETING2", "Welcome to W3Schools.com!");
}
echo GREETING2; nl();



