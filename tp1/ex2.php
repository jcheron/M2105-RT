<?php
  include "./ex1/ex1.php";
  $operations=array("addition","soustraction","multiplication","division");
  $a=50;$b=25;
  foreach ($operations as $op) {
    echo sprintf("%s de %d et %d : %d",$op,$a,$b,operation($a,$b,$op))."<br>";
  }
 ?>
