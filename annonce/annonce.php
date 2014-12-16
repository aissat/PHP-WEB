<!doctype html>
<html>
<head><title>ajoute annonce</title></head>
<body>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<?php

include_once('../core/GUI.php');
echo '<center>';
echo '<div>';

echo '<h3>Ajouté un annonce : </h3>';
$GUI = new GUI();
echo '<form action="ajoute_annonce.php" method="POST" >'.
$GUI->lineEdit('titre_annonce','text','Titre annonce','textfield').'<br>'.
$GUI->lineEdit('auteur','text','nom d\'auteur','textfield').'<br>'.
$GUI->textArea('context_annonce','text','tapez votre text d\'annonce  \n (1024 caractere) au max','textarea').'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';
echo '</center>';


?>

</body>
</html>