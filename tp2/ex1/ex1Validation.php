<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 16/03/2016
 * Time: 15:43
 */
include './../functions.php';
if(array_key_exists("nom",$_POST)){
    session_start();
    $_SESSION["user"]=$_POST["nom"];
    getHeader(false,"Exercice 1 validation");
    echo $_SESSION["user"];
}