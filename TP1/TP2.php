<?php
/**
 * Created by PhpStorm.
 * User: PC-Axel
 * Date: 23/03/2016
 * Time: 13:15
 */
?>
<<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="UTF-8">
<title>Question 1</title>
</head>
<body>

<p>

Cette page ne contient que du HTML.<br />

   Veuillez taper votre prénom :

</p>
<input type="checkbox" name="case" /> <label for="Ma case à cocher"</label> Mémoriser mes informations
<?php
$temps = date() + 5*60;
setcookie("prenom", $temps, null,null,);
?>

<form action="verificationTP2.php" method="post">

   <p>

       <input type="text" name="prenom" />


       <input type="submit" value="Valider" />

   </p>

</form>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Exercice 1</title>
</head>
<body>




<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

<p>Si tu veux changer de prenom, <a href="TP2.php">clique ici</a> pour revenir à la page formulaire.php.</p>


</body>
</html>