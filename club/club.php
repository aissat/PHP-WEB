<!doctype html>
<html>
<head><title>ajoute article</title></head>
<body>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<?php

include_once('../core/GUI.php');
echo '<center>';
echo '<div>';
echo '<h3>Ajouté un nouveau club : </h3>';
$GUI = new GUI();
echo '<form action="ajoute_club.php" method="POST" >'.
$GUI->lineEdit('nom_club','text','Nom du Club','textfield').'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';
echo '</center>';


?>

</body>
</html>