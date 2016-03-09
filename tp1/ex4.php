<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 09/03/2016
 * Time: 17:41
 */
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
<!doctype html>
<html>
<meta charset="utf-8">
<head></head>
<body>
<?php
$cols=0;$rows=0;
if(array_key_exists("rows",$_POST)){
  $rows=$_POST["rows"];
  $cols=$_POST["cols"];
}
?>
<fieldset>
    <legend>Création de tableau</legend>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<label>Lignes : <input type="number" name="rows" id="rows" value="<?php echo $rows?>"></label>
<label>Colonnes : <input type="number" name="cols" id="cols" value="<?php echo $cols?>"></label>
<input type="submit" value="Créer le tableau">
</form>
</fieldset>
<?php
echo createHTMLTable($rows,$cols);
?>
</body>
</html>
