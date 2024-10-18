<?php
// https://www.w3schools.com/php/php_arrays.asp

define("ENDL", "<br/>\n");

function nl() { echo ENDL;}

/*
PHP Global Variables - Superglobals
Some predefined variables in PHP are "superglobals", which means that they are 
always accessible, regardless of scope - and you can access them from any function, 
class or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

// https://www.w3schools.com/php/php_superglobals_globals.asp

/* To use a global variable inside a function you have to either define them 
as global with the global keyword, or refer to them by using the $GLOBALS syntax.
*/

// Refer to the global variable $x inside a function:

$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction();

/* In PHP you get nothing (or an error) when referring to a global variable without the $GLOBALS syntax: */

$xx = 75;
  
function myfunction2() {
    global $xx;
  echo $xx;
}

myfunction();


/* Create Global Variables
Variables created in the outer most scope are global variables either if they are created using the $GLOBALS syntax or not:
*/
$x3 = 100;
echo $GLOBALS["x3"];
echo $x3;


nl();
/* Create a global variable from inside a function, and use it outside of the function:
*/
function myfunction3() {
  $GLOBALS["x4"] = 99;
}

myfunction3();

echo $GLOBALS["x4"]; nl();
echo $x4;  nl();


// https://www.w3schools.com/php/php_superglobals_server.asp


nl();
/* $_SERVER
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
*/

echo $_SERVER['PHP_SELF']; nl();
echo $_SERVER['SERVER_NAME']; nl();
echo $_SERVER['HTTP_HOST']; nl();
echo $_SERVER['HTTP_REFERER']; nl();
echo $_SERVER['HTTP_USER_AGENT']; nl();
echo $_SERVER['SCRIPT_NAME']; nl();


/* The following table lists the most important elements that can go inside $_SERVER:
Element/Code	Description
$_SERVER['PHP_SELF']	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR']	Returns the IP address of the host server
$_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST']	Returns the Host header from the current request
$_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME']	Returns the path of the current script
$_SERVER['SCRIPT_URI']	Returns the URI of the current page
*/

foreach ($_SERVER as $k => $v) {
    echo "$k => $v";nl();
}


// https://www.w3schools.com/php/php_superglobals_request.asp

nl();
/* $_REQUEST
$_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.

In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:
$_REQUEST['firstname']
*/



/* Using $_REQUEST on $_POST Requests
POST request are usually data submitted from an HTML form.

Here is an example of how a HTML form could look like:

HTML form

<html>
<body>

<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>


When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.

In the action file we can use the $_REQUEST variable to collect the value of the input field.

PHP file

$name = $_REQUEST['fname'];
echo $name;

vedi file dedicato anche

*/

/* Using $_REQUEST on $_GET Requests
GET request can be form submissions as in the example above, with the method attribute of the HTML <form> element set to GET.

GET requests can also be data from a query string (information added after a URL address).

Here is an example of how an HTML hyperlink, with a query string could look like:

HTML link

<html>
<body>

<a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>
*/


// https://www.w3schools.com/php/php_superglobals_post.asp

nl();
/*
*/




nl();
/*
*/




nl();
/*
*/




nl();
/*
*/