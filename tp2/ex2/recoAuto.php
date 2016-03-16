<?php
include "./../functions.php";
getHeader(true,"recoAuto");
if(array_key_exists("nom",$_COOKIE)) {
    $user=$_COOKIE["nom"];
    $_SESSION["nom"] = $user;
}
?>

<div class="alert alert-success">
    Reconnexion automatique de <?php echo $user; ?>
</div>
