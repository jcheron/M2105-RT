<?php
$col=0;
$lig=0;
if(array_key_exists("nbCols",$_POST)) {
	$col = $_POST["nbCols"];
	$lig = $_POST["nbLignes"];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 1</title>
</head>
<body>
<div>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
		<fieldset style="vertical-align: middle;"><legend>Création de Tableau :</legend>
			<label for="nbLignes">Lignes : </label><input type="number" name="nbLignes" id="nbLignes" value="<?php echo $lig ?>">
			<label for="nbCols">Colonnes : </label><input type="number" name="nbCols" id="nbCols" value="<?php echo $col ?>">
			<input type="submit" value="Créer le tableau">
			<hr>
		</fieldset>
	</form>
</div>
<?php
function createHTMLtable($nbLignes,$nbCols){
	echo "<table border ='1'>";
for ($i=0;$i<$nbLignes;$i++){
    
echo"<tr>";
	$gras='normal';
	if($i%2==0) $gras="bold";
	for($j=0;$j<$nbCols;$j++){
    	$rouge=($j%2==0)?"color:red;":"";
    	echo "<td style ='{$rouge}font-weight:$gras'>{$i}-{$j}</td>";
	}
	echo "</tr>";
    
}
echo "</table>";

}    
//Test de création
	createHTMLtable($lig,$col);
?>


</body>
</html>
