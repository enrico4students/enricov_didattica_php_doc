<?php

/* 
Slicing
You can return a range of characters by using the substr() function.

Specify the start index and the number of characters you want to return.
Example
Start the slice at index 6 and end the slice 5 positions later:
*/
$x = "Hello World!";
echo substr($x, 6, 5);


echo "<br/>\n";
/* Slice to the End
By leaving out the length parameter, the range will go to the end:

Example
Start the slice at index 6 and go all the way to the end:
*/
$x = "Hello World!";
echo substr($x, 6);






echo "<br/>\n";
/* Slice From the End
Use negative indexes to start the slice from the end of the string:

Example
Get the 3 characters, starting from the "o" in world (index -5):
*/
$x = "Hello World!";
echo substr($x, -5, 3);




echo "<br/>\n";
/* Negative Length
Use negative length to specify how many characters to omit, starting from the end of the string:

Example
From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).

Should end up with "ow are y":
*/
$x = "Hi, how are you?";
echo substr($x, 5, -3);





echo "\n";
/* 
*/





echo "\n";
/* 
*/