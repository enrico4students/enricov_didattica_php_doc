<?php
function startsWith($string, $startString) {
    return substr($string, 0, strlen($startString)) === $startString;
}

function nrToLPaddedString($myStr, $numStr, $nrPad) {
    // Convert numStr in una stringa e applica il padding a sinistra con zeri
    $paddedNumStr = str_pad($numStr, $nrPad, "0", STR_PAD_LEFT);
    // Concatena myStr con il numero formattato
    return $myStr . $paddedNumStr;
}
