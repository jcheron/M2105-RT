<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Question 1</title>
</head>
<body>

<p>
    Veuillez taper votre prénom :
</p>


<form action="ex1verification.php" method="post" <?php echo $_SERVER['PHP_SELF']?>>
    <?php echo $_SERVER['prenom']; ?>
    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
    <div id="remember"><input type="checkbox" id="ckRemember" name="ckRemember"><label for="ckRemember">Mémoriser mes informations de connexion</label></div>
</form>

</body>
</html>

