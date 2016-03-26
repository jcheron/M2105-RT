<?php
/**
 * Created by PhpStorm.
 * User: PC-Axel
 * Date: 23/03/2016
 * Time: 13:19
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
<div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <p>Bonjour !</p>

        <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

        <p>Si tu veux changer de prénom, <a href="TP2.php.">clique ici</a> pour revenir à la page formulaire.php.</p>
</div>

</body>
</html>

