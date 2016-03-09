<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 09/03/2016
 * Time: 18:43
 */
include_once "functions.php";
for($i=0;$i<10;$i++) {
    echo "La factorielle de {$i} est " . fact($i) . "<br>";
}

for($i=0;$i<10;$i++) {
    echo "La factorielle (R) de {$i} est " . fact($i) . "<br>";
}