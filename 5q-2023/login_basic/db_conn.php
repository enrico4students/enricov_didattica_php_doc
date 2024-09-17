<?php

$sname= "127.0.0.1";

$unmae= "enrico";

$password = "ocirne00";

$db_name = "login_basic";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "DB Connection failed!";
} else {
    echo "DB Connection OK!";
}