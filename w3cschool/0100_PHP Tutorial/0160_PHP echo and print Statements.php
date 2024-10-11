<?php
/* The differences are small: 
    echo has no return value while 
    print has a return value of 1 so it can be used in expressions. 
    
    echo can take multiple parameters (although such usage is rare) while 
    print can take one argument. 
    
    echo is marginally faster than print. */

echo "Hello";
//same as:
echo("Hello");






echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";





/* isplay Variables
The following example shows how to output text and variables with the echo statement: */
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";





/* Using Single Quotes
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP. 
EV: with single quotes there is no variable interpolation
*/
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';
// EV added
echo '<p>Study PHP at $txt2</p>';
echo "<p>Study PHP at $txt2</p>";





/* The PHP print Statement
The print statement can be used with or without parentheses: print or print().
*/
print "Hello";
//same as:
print("Hello");





/* Display Text 
*/
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";





/* Display Variables
*/
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";





/* Using Single Quotes
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
When using double quotes, variables can be inserted to the string as in the example above.
When using single quotes, variables have to be inserted using the . operator, like this:
*/
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';











