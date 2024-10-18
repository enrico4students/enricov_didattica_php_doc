<?php
// https://www.w3schools.com/php/php_if_else.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}


nl();
/* In PHP we have the following conditional statements:

if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed
*/


/* PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.

Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}
*/
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

nl();
/* Short Hand If
To write shorter code, you can write if statements on one line.

ExampleGet your own PHP Server
One-line if statement:
*/
$a = 5;
if ($a < 10) $b = "Hello";
echo $b;

/* Short Hand If...Else
if...else statements can also be written in one line, but the syntax is a bit different.
(EV operatore ternario) */
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;


