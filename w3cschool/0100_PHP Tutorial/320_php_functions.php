<?php
// https://www.w3schools.com/php/php_switch.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}


nl();
/* In PHP, we have the following loop types:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
*/

nl();
// The PHP while Loop
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}


// The break Statement
// With the break statement we can stop the loop even if the condition is still true:

$i = 1;
while ($i < 6) {
    if ($i == 3) break;
    echo $i; nl();
    $i++;
}


/// The continue Statement
// With the continue statement we can stop the current iteration, and continue with the next:

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i; nl();
}


// Alternative Syntax
// The while loop syntax can also be written with the endwhile statement like this

$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

// https://www.w3schools.com/php/php_looping_do_while.asp
$i = 1;

do {
  echo $i; nl();
  $i++;
} while ($i < 6);

$i = 8;

do {
  echo $i; nl();
  $i++;
} while ($i < 6);


// The break Statement
// With the break statement we can stop the loop even if the condition is still true:

//Stop the loop when $i is 3:
$i = 1;

do {
  if ($i == 3) break;
  echo $i; nl();
  $i++;
} while ($i < 6);





// The continue Statement
// With the continue statement we can stop the current iteration, and continue with the next:

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i; nl();
} while ($i < 6);







// https://www.w3schools.com/php/php_looping_for.asphttps://www.w3schools.com/php/php_looping_for.asp


/* The PHP for Loop
The for loop is used when you know how many times the script should run.

Syntax
for (expression1, expression2, expression3) {
  // code block
}
This is how it works:

expression1 is evaluated once
expression2 is evaluated before each iteration
expression3 is evaluated after each iteration
 */

// Print the numbers from 0 to 10:
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}


for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
}

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
}

// Step 10 - This example counts to 100 by tens:
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x";  nl();
}






// The foreach Loop on Arrays
// The most common use of the foreach loop, is to loop through the items of an array.

// Loop through the items of an indexed array:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>\n";
}


// Keys and Values
// The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
// Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.

// This can be done by specifying both the key and value in the foreach defintition, like this:

//Print both the key and the value from the $members array:
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($members as $x => $y) {
  echo "$x : $y <br>\n";
}

// ev - added
$colors = array("red", "green");
foreach ($colors as $key => $value) {
  echo "$key => $value<br>\n";
}

$colors[20] = 20;
foreach ($colors as $key => $value) echo "$key => $value<br>\n";


// The foreach Loop on Objects
// The foreach loop can also be used to loop through properties of an object:

// Print the property names and values of the $myCar object:

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");
foreach ($myCar as $x => $y) {
  echo "$x: $y <br>\n";
}

// EV added
foreach (new Car("bianca", "500") as $x => $y) {
    echo "$x: $y <br>\n";
  }


// The break Statement
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
if ($x == "blue") break;
echo "$x <br>";
}

// The continue Statement
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}


// Foreach Byref

// When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
// By default, changing an array item will not affect the original array:
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);

// By assigning the array items by reference, changes will affect the original array:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}
var_dump($colors);

// EV added
$x = 10;
$y = &$x;
$y = 5;
echo $y;


// The foreach loop syntax can also be written with the endforeach statement like this
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) :
  echo "$x <br>";
endforeach;

// https://www.w3schools.com/php/php_looping_break.asp
// ignorato, cose ripetute 2000 volte

// https://www.w3schools.com/php/php_looping_continue.asp
// ignorato, cose ripetute 2000 volte
