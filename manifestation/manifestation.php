<!doctype html>
<html>
<head><title>Ajoute Une Manifestation</title></head>
<body>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<?php

include_once('../core/GUI.php');
echo '<center>';
echo '<div>';
echo '<h3>Ajouté Une Manifestation : </h3>';
$GUI = new GUI();
echo '<form action="ajoute_manifestation.php" method="POST" >'.
$GUI->lineEdit('nom_manifestation','text','Nom de Manifestation','textfield').'<br>'.
$GUI->lineEdit('date_fin','text','YYYY-MM-DD','textfield').'<br>'.
$GUI->lineEdit('date_debut','text','YYYY-MM-DD','textfield').'<br>'.
$GUI->pushButton('Sauvgarder >>','button');
echo '</form>';
echo '</center>';


?>

</body>
</html>