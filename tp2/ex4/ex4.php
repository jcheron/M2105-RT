<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 23/03/2016
 * Time: 13:30
 */

include '../functions.php';
getHeader(true, "Exercice 4");
if(isset($_POST['socialNetworks'])) {
    $_SESSION['socialNetworks'] = $_POST['socialNetworks'];
}
?>

    <form method="post" action="ex4.php">
        <fieldset>
            <legend>Question2</legend>
            <fieldset>
                <legend>Quel est votre navigateur favori ?</legend>
                <input name="socialNetworks[]" value="Facebook" type="checkbox"><label>Facebook</label>
                <input name="socialNetworks[]" value="Twitter" type="checkbox"><label>Twitter</label>
                <input name="socialNetworks[]" value="Badoo" type="checkbox"><label>Badoo</label>
                <input name="socialNetworks[]" value="Google+" type="checkbox"><label>Google +</label>
            </fieldset>
            <input type="submit" />
        </fieldset>
    </form>

<?php

getFooter();

?>