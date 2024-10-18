<?php
// https://www.w3schools.com/php/php_switch.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}

/* 
The PHP switch Statement
Use the switch statement to select one of many blocks of code to be executed.

Syntax
switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}
    */

$favcolor = "red";

switch ($favcolor) {
    case "red":
    echo "Your favorite color is red!";
    break;
    case "blue":
    echo "Your favorite color is blue!";
    break;
    case "green":
    echo "Your favorite color is green!";
    break;
    default:
    echo "Your favorite color is neither red, blue, nor green!";
}


nl();
/* The break Keyword
When PHP reaches a break keyword, it breaks out of the switch block.

This will stop the execution of more code, and no more cases are tested.

The last block does not need a break, the block breaks (ends) there anyway.
*/
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


nl();
/* The default Keyword
The default keyword specifies the code to run if there is no case match:
*/
//If no cases get a match, the default block is executed:

$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}

// The default case does not have to be the last case in a switch block

// if one condition matches default is ignored even if first
nl();
switch (6) {
    default:
        echo "Looking forward to the Weekend";
        nl();
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;
}

// missing break it will execute from top until it finds the first break
nl();
switch (4) {
    default:
        echo "Looking forward to the Weekend";
        nl();
    case 6:
        echo "Today is Saturday";
        break;
    case 0:
        echo "Today is Sunday";
        break;
}




nl();
/* Common Code Blocks
If you want multiple cases to use the same code block, you can specify the cases like this:
*/
    
$d = 3;

switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:  
    echo "The weeks feels so long!";
    break;
    case 6:
    case 0:
    echo "Weekends are the best!";
    break;
    default:
    echo "Something went wrong";
}