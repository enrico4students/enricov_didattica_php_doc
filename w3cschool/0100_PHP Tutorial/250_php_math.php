<?php
// https://www.w3schools.com/php/php_math.asp


define(ENDL, "<br/>\n");
function nl() { echo ENDL;}

// PHP pi() Function
// The pi() function returns the value of PI:
echo(pi()); nl();

nl();
// PHP min() and max() Functions
echo(min(0, 150, 30, 20, -8, -200)); nl();
echo(max(0, 150, 30, 20, -8, -200)); nl();

// PHP abs() Function
echo(abs(-6.7)); nl();

// PHP sqrt() Function
echo(sqrt(64)); nl();

// PHP round() Function
// The round() function rounds a floating-point number to its nearest integer:
echo(round(0.60));
echo(round(0.49));

// Random Numbers
// The rand() function generates a random number:
echo(rand());

// you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
echo(rand(10, 100));

