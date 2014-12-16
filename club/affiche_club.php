<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>affiche article</title></head>
<body>
	


<?php
// affiche
$id = $_GET['id'];

echo  '<center><div id="formAdd" align="left" ><p><b>Nom du Club : </b>'.$_POST['nom_club'].'</p><br>';
echo  '</div></center>';

echo '<form method="POST" action="club.php?id='.$id.'">';
echo '<input name="nom_club" type="hidden" value="'.$_POST['nom_club'].'" />';
echo '<center><input type="submit" value="VALIDE" id="button" /></center></form> ';

echo '<form method="POST" action="modifie_club.php?id='.$id.'">';
echo '<center><input type="submit" value="Retour" id="button" /></center></form> ';


?>
</body>
</html>