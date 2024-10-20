<?php
// https://www.w3schools.com/php/php_includes.asp


define(ENDL, "<br/>\n");
function nl() { echo ENDL;}



/*  insert the content of one PHP file into another PHP file (before the server executes it), 
with the include or require statement.

The include and require statements are identical, except upon failure:

require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue

So, if you want the execution to go on and show users the output, even if the include file is missing, 
use the include statement. 
Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, 
always use the require statement to include a key file to the flow of execution. 
This will help avoid compromising your application's security and integrity, 
just in-case one key file is accidentally missing.

Including files saves a lot of work. 
This means that you can create a standard header, footer, or menu file for all your web pages. 
Then, when the header needs to be updated, you can only update the header include file.

Syntax
include 'filename';

or

require 'filename';

*/





/* PHP include Examples
Example 1
Assume we have a standard footer file called "footer.php", that looks like this:
---------------------------------------
<?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
?>
To include the footer file in a page, use the include statement:

ExampleGet your own PHP Server
<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<?php include 'footer.php';?>

</body>
</html>
---------------------------------------



Example 2
Assume we have a standard menu file called "menu.php":

---------------------------------------
<?php
echo '<a href="/default.asp">Home</a> -
<a href="/html/default.asp">HTML Tutorial</a> -
<a href="/css/default.asp">CSS Tutorial</a> -
<a href="/js/default.asp">JavaScript Tutorial</a> -
<a href="default.asp">PHP Tutorial</a>';
?>
---------------------------------------

*/



/* PHP include vs. require
The require statement is also used to include a file into the PHP code.

However, there is one big difference between include and require; 
when a file is included with the include statement and PHP cannot find it, 
the script will continue to execute:

Example
---------------------------------------
<html>
<body>

<h1>Welcome to my home page!</h1>
<?php include 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>
---------------------------------------


If we do the same example using the require statement, 
the echo statement will not be executed because the script execution dies 
after the require statement returned a fatal error:

Example
---------------------------------------
<html>
<body>

<h1>Welcome to my home page!</h1>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>
---------------------------------------

*/

