<!DOCTYPE html>
<?php
$res="";$c="";$texte="exemple de texte <br>\n ";
if(isset($_POST["texte"])){
	$op=$_POST["op"];
	$res=$op($_POST["texte"]);
	$texte=$_POST["texte"];
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Exercice 7</title>
</head>
<style>
body, textarea, select {
	font-family: Tahoma, arial;
	font-size: 12px;
}
textarea {
	box-sizing:border-box;
	-moz-box-sizing:border-box; /* Firefox */
}
</style>
<body>
<div>
<fieldset style="vertical-align: middle;"><legend>Chaînes</legend>
<form method="post">
<label for="texte">Frapper votre texte : </label><br><textarea id="texte" name="texte" style="width: 100%"><?=$texte?></textarea><br>
<select id="op" name="op" size="10"  style="width: 100%">
	<option value="ucfirst">1ère lettre en MAJ</option>
	<option value="strtoupper">Majuscule</option>
	<option value="strtolower">Minuscule</option>
	<option value="nl2br">ligne->BR</option>
	<option value="sha1">sha1</option>
	<option value="md5">md5</option>
	<option value="ucwords">1ère lettre mots en MAJ</option>
	<option value="convert_uuencode">URL encode</option>
	<option value="htmlentities">Entités HTML</option>
	<option value="wordwrap">Césure chaîne</option>
	
</select>
<br>
<input type="submit" value="Appeler la fonction" style="width: 100%">
</form>
</fieldset></div>
<fieldset style="color: green;font-weight: bold;"><legend>Résultat</legend>
<?php echo($res);?>
</fieldset>
<?php
?>
</body>
</html>