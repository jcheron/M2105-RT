<h1>Liste des variables de session</h1>
<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 16/03/2016
 * Time: 15:57
 */
session_start();
foreach($_SESSION as $k=>$v){
    echo $k."=>".$v."<br>";
}