<?php
// https://www.w3schools.com/php/php_math.asp


define(ENDL, "<br/>\n");
function nl() { echo ENDL;}

/* 
PHP - A Simple HTML Form
The example below displays a simple HTML form with two input fields and a submit button:

Example
<html>
<body>

<form action="welcome.php" method="POST">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>


When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables.

The "welcome.php" looks like this:

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
*/





/* The same result could also be achieved using the HTTP GET method:

Example
Same example, but the method is set to GET instead of POST:

<html>
<body>

<form action="welcome_get.php" method="GET">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

and "welcome_get.php" looks like this:

<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>
*/



/*
GET vs. POST
Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). 
This array holds key/value pairs, where keys are the names of the form controls and 
values are the input data from the user.

Both GET and POST are treated as $_GET and $_POST. 
These are superglobals, which means that they are always accessible, regardless of scope - and 
you can access them from any function, class or file without having to do anything special.

$_GET is an array of variables passed to the current script via the URL parameters.

$_POST is an array of variables passed to the current script via the HTTP POST method.

When to use GET?
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.

GET may be used for sending non-sensitive data.

Note: GET should NEVER be used for sending passwords or other sensitive information!

When to use POST?
Information sent from a form with the POST method is invisible to others 
(all names/values are embedded within the body of the HTTP request) and 
has no limits on the amount of information to send.

Moreover POST supports advanced functionality such as support for 
multi-part binary input while uploading files to server.

However, because the variables are not displayed in the URL, 
it is not possible to bookmark the page.
*/