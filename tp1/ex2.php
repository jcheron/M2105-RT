<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Variables</title>
</head>
<body>

<?php
    function operation($val1,$val2,$op){
        if($op=='addition')
            return addition($val1,$val2); 
        elseif ($op=='multiplication')
            return multiplication($val1,$val2);
        elseif ($op=='soustraction')
            return soustraction($val1,$val2);
        elseif ($op=='division')
            return division($val1,$val2);   
    }
$val1=45;
$val2=2;
operation($val1,$val2,"multiplication");
    
//Déclaration de la fonction
function addition($val1,$val2){
    $c=$val1+$val2;
    echo $c;
    }
//Les variables
$val1=3;
$b=4;
//Appel de la fonction
addition($val1,$val2);
    
echo "<br>";
function multiplication($val1,$val2){
    $c=$val1*$val2;
    echo $c;
    }
multiplication($val1,$val2);

echo "<br>";
function soustraction($val1,$val2){
    $c=$val1-$val2;
    echo $c;
    }
soustraction($val1,$val2);
echo "<br>";
function division($val1,$val2){
    $c=$val1/$val2;
    echo $c;
    }
division($val1,$val2);
    ?>

</body>
</html>