
<<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>


<div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <fieldset style="vertical-align: middle;"><legend>Connexion :</legend>
            <label for="nbRows">NombreColonnes : </label><input type="number" name="nbRows" id="nbRows">
            <label for="nbCols">NombreLignes : </label><input type="number" name="nbCols" id="nbCols">
            <input type="submit" value="Valider">
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
createHTMLtable($col,$lig)

?>


</body>
</html>