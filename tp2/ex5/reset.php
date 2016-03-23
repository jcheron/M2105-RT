<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 23/03/2016
 * Time: 14:46
 */
include '../functions.php';
getHeader(true, "Exercice 5");
$_SESSION = array();
session_destroy();
?>
<div class="container">
    <div class="alert alert-info">
        Vous avec été correctement déconnecté.<br>
        <a class="btn btn-default" href="../ex2/ex2.php">Se connecter à nouveau</a>
    </div>
</div>


