<?php

$v = array();

// estensibile?
$v[3] = 10;
if ($v[3] == 10) {
    print("si");
} else {
    print("no");    
}

// print(var_dump($v));
print("\nl'array contiene " . count($v) . " elementi, ne aggiungo uno in pos. 9\n");
$v[9] = 99;
print("ora l'array contiene " . count($v) . " elementi");


print("provo \$v['9'] " . $v['9']);

$v[0] = 0.01;
print("\nprovo \$v['0'] " . $v['0']);

$v["9"] = 9;
print("\nprovo \$v[9] " . $v[9]);


for ($i = 0; $i <= 9; $i++) {
    $val = $v[$i];
    print("\n\$v[$i] = $val");
}


for ($i = 0; $i < 10; $i++) {
    $v[$i] = "valore_$i";
}

for ($i = 0; $i < 10; $i++) {
    print("\$v[$i] = $v[$i]\n");
}


$v2 = array("val1", "key2" => "val2", "val3");
foreach ($v2 as $e) {
    print("\$e = $e\n");
}
print("\$v2['key2'] " . $v2['key2'] ."\n");

var_dump($v2);
$chiavi = array_keys($v2);
var_dump($chiavi);

/** 
 * da https://www.php.net/manual/en/language.types.array.php
*/
