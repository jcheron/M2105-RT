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
    if(array_key_exists("ckRemember",$_POST)){
        setcookie("nom",$_POST["nom"],time()+5*60);
    }
    getHeader(false,"Exercice 2 validation");
    echo $_SESSION["user"];
}