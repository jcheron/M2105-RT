<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 23/03/2016
 * Time: 15:03
 */
include '../functions.php';
getHeader(true, "Exercice 6");

if(array_key_exists("nom",$_COOKIE)){
    $user=$_COOKIE["nom"];
}
if(array_key_exists("delete",$_POST)) {
    setcookie("nom", "", time() - 3600);
    echo "<div class='alert alert-info'>Cookie de {$user} supprimé.</div>";
}else if(isset($user)){
    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <input type="button" name="delete" value="Supprimer cookie de {$user}">
    </form>
    <?php
}else{
    echo "<div class='alert alert-info'>Rien à faire...</div>";
}
var_dump($_COOKIE);
