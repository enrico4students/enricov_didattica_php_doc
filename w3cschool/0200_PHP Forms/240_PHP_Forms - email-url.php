<?php

/// https://www.w3schools.com/php/php_form_required.asp

define(ENDL, "<br/>\n");
function nl() { echo ENDL;}

/* PHP - Validate Name
The code below shows a simple way to check if the name field only contains letters, 
dashes, apostrophes and whitespaces. 
If the value of the name field is not valid, then store an error message:

$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}

The preg_match() function searches a string for pattern, returning true if the pattern exists, 
and false otherwise.
*/





/* PHP - Validate E-mail
The easiest and safest way to check whether an email address is well-formed 
is to use PHP's filter_var() function.

In the code below, if the e-mail address is not well-formed, then store an error message:

$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
*/





/* PHP - Validate URL
The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:

$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}
*/





/* 
*/







/* 
*/