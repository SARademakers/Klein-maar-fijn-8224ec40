<?php

$input = ($argv[1]);
$geldeenheden = array(50, 20, 10, 5, 2, 1);
$centen = array(50, 20 ,10 ,5);
$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));

foreach ($geldeenheden as $value) {
    $restgeld = floor($geld / $value);
    if ($restgeld >= 1) {
        $geld = $geld - ($value * $restgeld);
        echo $restgeld . " x " . $value . " euro" . PHP_EOL;
    }
}
foreach ($centen as $value) {
    $restcent = floor($cent / $value);
    if ($restcent >= 1) {
        $cent = $cent - ($value * $restcent);
        echo $restcent . " x " . $value . " cent" . PHP_EOL;
    }
}
?>