<?php 
include "../synthese1/menu.php";
include "ex1.php" ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
  $a=50;$b=25;
  echo sprintf("Addition de %d et %d : %d",$a,$b,addition($a,$b))."<br>";
  echo sprintf("Soustraction de %d par %d : %d",$a,$b,soustraction($a,$b))."<br>";
  echo sprintf("division de %d par %d : %d",$a,$b,division($a,$b))."<br>";
  echo sprintf("Multiplication de %d par %d : %d",$a,$b,multiplication($a,$b))."<br>";
   ?>
</body>
</html>
