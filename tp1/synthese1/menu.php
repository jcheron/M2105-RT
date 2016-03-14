<?php
/**
 * Created by PhpStorm.
 * User: jc
 * Date: 14/03/2016
 * Time: 01:16
 */
 $baseURI="/M2105-RT/tp1";
 $links = array(
		["href" => $baseURI."/ex1", "title" => "Accès à l'exercice 1", "texte" => "Exercice1"],
	["href" => $baseURI."/ex2.php", "title" => "Accès à l'exercice 2", "texte" => "Exercice2"],
	["href" => $baseURI."/ex3.php", "title" => "Accès à l'exercice 3", "texte" => "Exercice3"],
	["href" => $baseURI."/ex4.php", "title" => "Accès à l'exercice 4", "texte" => "Exercice4"],
	["href" => $baseURI."/ex5/test.php", "title" => "Accès à l'exercice 5", "texte" => "Exercice5"]
);
function getMenu($liens){
    $pageActive = $_SERVER["PHP_SELF"];

    foreach ($liens as $lnk) {
        if (stripos($pageActive, $lnk["href"]) === false) {
            echo "<a href='{$lnk["href"]}' title=\"{$lnk["title"]}\">
            {$lnk['texte']}</a><br>";
        } else {
            echo $lnk["texte"] . "<br>";
        }
    }
}
function postMenu($liens){
	if(array_key_exists("menu",$_POST)){
		header("location:".$_POST["menu"]);
	}
    $pageActive = $_SERVER["PHP_SELF"];
	?>
	<form method="post" action="<?php echo $pageActive;?>">
	<select name='menu' id='menu'>
    <?php
	foreach ($liens as $lnk) {
		$selected="";
        if (stripos($pageActive, $lnk["href"]) !== false)
			$selected="selected";
        echo "<option {$selected} value='{$lnk["href"]}'>
            {$lnk['texte']}</option>";
    }
	?>
	</select>
	<input type="submit" value="go">
	</form>
	<?php
}
postMenu($links);
getMenu($links);