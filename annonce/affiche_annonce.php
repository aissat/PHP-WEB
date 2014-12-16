<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>affiche annonce</title></head>
<body>
	


<?php
// affiche
$id = $_GET['id'];

echo  '<center><div id="formAdd" align="left" ><p><b>Titre annonce : </b>'.$_POST['titre_annonce'].'</p><br>';
echo '<p><b>Auteur : </b>'.$_POST['auteur'].'</p><br>';
echo '<p><b>Text D\'annonce : </b>'.$_POST['context_annonce'].'</p><br>';


echo '<form method="POST" action="valide_annonce.php?id='.$id.'">';
echo '<input name="titre_annonce" type="hidden" value="'.$_POST['titre_annonce'].'" />';
echo '<input name="auteur" type="hidden" value="'.$_POST['auteur'].'" />';
echo '<input name="context_annonce" type="hidden" value="'.$_POST['context_annonce'].'" />';
echo '<center><input type="submit" value="VALIDE" id="button" /></center></form> ';

echo '<form method="POST" action="modifie_annonce.php?id='.$id.'">';
echo '<center><input type="submit" value="Retour" id="button" /></center></form> ';


?>
</body>
</html>