<?php
/**
 * Created by PhpStorm.
 * User: PC-Axel
 * Date: 23/03/2016
 * Time: 13:56
 */

include 'functions.php';
getheaders(true,"Exercice3");

if(isset($_POST['browser'])) {
    $_SESSION['browser'] = $_POST['browser'];
}
?>

<form method="post" action = "ex3.php"
    <fieldset>
            <legend>  Question1</legend>
    <fieldset>
        <legend> Quel est votre navigateur favori ?</legend>
            <input name='browser' value= 'Chrome' type ="radio"><label>Chrome</label>
            <input name='browser' value= 'Firefox' type ="radio"><label>Firefox</label>
            <input name='browser' value= 'Internet Explorer' type = "radio"><label>Internet Explorer </label>
    </fieldset>
input type = 'submit' />
    </fieldset
</form>
<?php

GetFooter();
?>

