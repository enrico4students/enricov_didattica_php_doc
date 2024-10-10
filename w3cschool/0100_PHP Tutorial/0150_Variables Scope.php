<?php
/* PHP has three different variable scopes:
local
global
static

Global and Local Scope
A variable declared outside a function has a GLOBAL SCOPE 
and can only be accessed outside a function:
*/
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  // echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";





/* A variable declared within a function has a LOCAL SCOPE 
and can only be accessed within that function:*/
function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest2();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";





  /* PHP The global Keyword
The global keyword is used to access a global variable from within a function.
To do this, use the global keyword before the variables (inside the function): 
*/

$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();
echo $y; // outputs 15


/* PHP also stores all global variables in an array called $GLOBALS[index]. 
The index holds the name of the variable. 
This array is also accessible from within functions 
and can be used to update global variables directly.

The example above can be rewritten like this: */
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest4();
echo $y . "\n"; // outputs 15






/* PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
To do this, use the static keyword when you first declare the variable:
*/
function myTest5() {
    static $x = 0;
    echo "static \$x = $x\n";
    $x++;
  }

  myTest5(); myTest5(); myTest5();





  

echo "fine";