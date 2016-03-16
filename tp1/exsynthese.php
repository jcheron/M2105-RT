<html>

<head>

</head>

<body>
<form action = "<?<a title="See also PHP: Créer un contrôle 'TextBox' HTML automatiquement" href="http://php.mesexemples.com/plus/formulaire-plus/php-creer-un-controle-textbox-html-automatiquement-2/">php</a> print $_SERVER['PHP_SELF'];?>" method = "post">

    Valeur 1:
    <input type = "text" name = "val1" size = "10">
    Valeur 2:
    <input type = "text" name = "val2" size = "10">

    Opération:
    <input type = "radio" name = "operation" value = "add"> Addition
    <input type = "radio" name = "operation" value = "sous"> Sustraction
    <input type = "radio" name = "operation" value = "mul"> Multiplication
    <input type = "radio" name = "operation" value = "div"> Division
    <hr />
    <input type = "submit" value = "Calculate">
    <input type = "reset" value = "Clear"></form>

</body>

</html>

<?<a title="See also PHP: Concatener le design du formulaire dans une variable" href="http://php.mesexemples.com/plus/formulaire-plus/php-concatener-le-design-du-formulaire-dans-une-variable-2/">php</a>

if(isset($_POST['val1'])&#038;&isset($_POST['val2'])&#038;&isset($_POST['operation']))
{
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $operation = $_POST['operation'];

    if( is_numeric( $val1 ) &#038;& is_numeric( $val2 ) )
  {
      if( $operation != null )
      {
          switch( $operation )
          {
              case "add" : $result = $val1 + $val2; break;
              case "mul" : $result = $val1 * $val2; break;
              case "sous" : $result = $val1 - $val2; break;
              case "div" : $result = $val1 / $val2; break;
          }
          echo( "Résultat de Calcul:<b> $result</b>" );
      }
  }
  else
  {
      echo( "Données invalide, veillez ré-essayer ");
  }

}
 ?>