<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 16/03/2016
 * Time: 14:45
 */

include './../functions.php';
getHeader(true,"Exercice 1");
?>
<div class="container">
    <form class="form-inline" method="post" action="ex1Validation.php">
        <fieldset>
            <legend>Connexion</legend>
            <div class="alert alert-info">Saisir votre nom et valider.</div>
            <div class="form-group">
                <input placeholder="Nom..." class="form-control" type="text" name="nom">
                <input class="btn btn-primary" type="submit" value="Valider">
            </div>
        </fieldset>

    </form>
</div>

<?php
getFooter();