<!doctype html>
<html>
<head><title>ajoute article</title></head>
<body>
<link rel="stylesheet" type="text/css" href="../style/style.css"/>
<meta charset="UTF-8">
<?php

include_once('../core/GUI.php');
echo '<center>';
echo '<div>';
$arrayClubs = array();

$arrayClubs[0] = 'نادي محو الأمية';
$arrayClubs[1] = 'نادي الشباب';
$arrayClubs[2] = 'نادي البراعم';
$arrayClubs[3] = 'نادي الطفل';
$arrayClubs[4] = 'نادي المرأة';
echo '<h3>Ajouté un article : </h3>';
$GUI = new GUI();
echo '<form action="ajoute_article.php" method="POST" >'.
$GUI->lineEdit('titre_article','text','Titre article','textfield').'<br>'.
$GUI->lineEdit('auteur','text','nom d\'auteur','textfield').'<br>'.
$GUI->textArea('context_article','text','tapez votre text d\'article  \n (1024 caractere) au max','textarea').'<br>'.
$GUI->comboBox('club',(array)$arrayClubs,'comboBox').'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';
echo '</center>';


?>

</body>
</html>