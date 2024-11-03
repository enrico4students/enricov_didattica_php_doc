<?php
$sapi_type = php_sapi_name();
echo $sapi_type . "<br/><br/>";
if (substr($sapi_type, 0, 3) == 'cgi') {
    echo "You are using CGI PHP\n";
} else {
    echo "You are not using CGI PHP\n";
}