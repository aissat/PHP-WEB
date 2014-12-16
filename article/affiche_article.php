<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>affiche article</title></head>
<body>
	


<?php
// affiche
$id = $_GET['id'];

echo  '<center><div id="formAdd" align="left" ><p><b>Titre article : </b>'.$_POST['titre_article'].'</p><br>';
echo '<p><b>Auteur : </b>'.$_POST['auteur'].'</p><br>';
echo '<p><b>Text D\'article : </b>'.$_POST['context_article'].'</p><br>';
echo '<p><b>Club : </b>'.$_POST['club'].'</p><br></div></center>';

echo '<form method="POST" action="valide_article.php?id='.$id.'">';
echo '<input name="titre_article" type="hidden" value="'.$_POST['titre_article'].'" />';
echo '<input name="auteur" type="hidden" value="'.$_POST['auteur'].'" />';
echo '<input name="context_article" type="hidden" value="'.$_POST['context_article'].'" />';
echo '<input name="club" type="hidden" value="'.$_POST['club'].'" />';
echo '<center><input type="submit" value="VALIDE" id="button" /></center></form> ';

echo '<form method="POST" action="modifie_article.php?id='.$id.'">';
echo '<center><input type="submit" value="Retour" id="button" /></center></form> ';


?>
</body>
</html>