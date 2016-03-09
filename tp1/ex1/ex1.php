<?php
//Déclaration des fonctions
function addition($a,$b){
    return $a+$b;
}
function soustraction($a,$b){
  return $a-$b;
}

function multiplication($a,$b){
  return $a*$b;
}

function division($a,$b){
  return $a/$b;
}

function operation($val1,$val2,$op){
  return $op($val1,$val2);
}
 ?>
