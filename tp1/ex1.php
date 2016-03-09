<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Variables</title>
</head>
<body>

<?php
//Déclaration de la fonction
function addition($a,$b){
    $c=$a+$b;
    echo $c;
    }
//Les variables
$a=3;
$b=4;
//Appel de la fonction
addition($a,$b);
    
echo "<br>";
function multiplication($a,$b){
    $c=$a*$b;
    echo $c;
    }
multiplication($a,$b);

echo "<br>";
function soustraction($a,$b){
    $c=$a-$b;
    echo $c;
    }
soustraction($a,$b);
echo "<br>";
function division($a,$b){
    $c=$a/$b;
    echo $c;
    }
division($a,$b);
    ?>

</body>
</html>