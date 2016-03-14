<?php
include "./synthese1/menu.php";

function createHTMLTable($nbLignes,$nbCols){
  echo "<table border='1'>";
  for($i=0;$i<$nbLignes;$i++){
    echo "<tr>";
    $gras=($i%2==0)?"bold":"normal";
    for($j=0;$j<$nbCols;$j++){
      $rouge=($j%2==0)?"color:red;":"";
      echo "<td style='{$rouge}font-weight:{$gras}'>{$i}-{$j}</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}
 ?>
 <h3>Tests</h3>
 <ul>
 <li><a href="?nbRows=2&nbCols=2">Créer un tableau de 2 X 2</a></li>
 <li><a href="?nbRows=10&nbCols=7">Créer un tableau de 10 X 7</a></li>
 <li><a href="?nbRows=5&nbCols=5">Créer un tableau de 5 X 5</a></li>
 </ul>
<?php
if(array_key_exists("nbRows",$_GET))
  createHTMLTable($_GET["nbRows"],$_GET["nbCols"]);
?>
