<!doctype html>
<html>
<head><title>ajouté service</title></head>
<body>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<?php

include_once('../core/GUI.php');
echo '<center>';
echo '<div>';

echo '<h3>Ajouté un service : </h3>';
$GUI = new GUI();
echo '<form action="ajoute_service.php" method="POST" >'.
$GUI->lineEdit('nom_service','text','nom service','textfield').'<br>'.
$GUI->textArea('info','text','tapez votre information sur le service  \n (1024 caractere) au max','textarea').'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';
echo '</center>';

?>

</body>
</html>