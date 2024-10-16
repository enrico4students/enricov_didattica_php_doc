<?php
$x = 99;
function f() {
    global $x;
    echo "il valore è $x";
}

f();
