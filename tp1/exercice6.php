<!DOCTYPE html>
<?php
$res="";$c="";
if(isset($_POST["texte"])){
	$op=$_POST["op"];
	switch ($op){
		case "wordCount":
			$res="3 mots";
			break;
	}
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 6</title>
</head>
<style>
body {
	font-family: Tahoma, arial;
	font-size: 12px;
}
</style>
<body>
<div>
<fieldset style="vertical-align: middle;"><legend>Chaînes</legend>
<form method="post">
<label for="texte">Frapper votre texte : </label><br><textarea id="texte" name="texte">texte en minuscule</textarea><br>
<select id="op" name="op">
	<option value="wordCount">Nombre de mots</option>
	<option value="charCount">Nombre de caractères</option>
</select>
<label for="c">Caractère ? </label><input id="c" name="c" type="text" value="<?=$c?>"><br>
<input type="submit" value="Compter" style="width: 100%">
</form>
</fieldset></div>
<fieldset><legend>Résultat</legend>
<?php echo($res);?>
</fieldset>
<?php
?>
</body>
</html>