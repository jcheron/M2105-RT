<?php
include "functions.php";
getHeader(true,"");
if(array_key_exists("delete",$_GET)){
    resetSession();
};
?>
<div class="jumbotron">
<h1>Liste des variables de session</h1>
<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 16/03/2016
 * Time: 15:57
 */
?>
<div class="list-group">
    <ul>
        <?php
        foreach ($_SESSION as $k=>$v){
            if(is_array($v)){
                echo "<li class='list-group-item'>{$k} =>".implode(' ',$v)."</li>";
            }else {
                echo "<li class='list-group-item'>{$k} => {$v}</li>";
            }
        }
        ?>
    </ul>
</div>
<a class="btn btn-primary" href="<?php echo($_SERVER["PHP_SELF"]."?delete")?>">Supprimer les variables de session</a>
</div>
