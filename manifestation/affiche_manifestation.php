<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>Affiche La Manifestation</title></head>
<body>
	


<?php
// affiche
$id = $_GET['id'];

echo  '<center><div id="formAdd" align="left" ><p><b>Nom Manifestation : </b>'.$_POST['nom_manifestation'].'</p><br>';
echo '<p><b>Date Debut : </b>'.$_POST['date_debut'].'</p><br>';
echo '<p><b>Date Fin : </b>'.$_POST['date_fin'].'</p><br></div></center>';


echo '<form method="POST" action="valide_manifestation.php?id='.$id.'">';
echo '<input name="nom_manifestation" type="hidden" value="'.$_POST['nom_manifestation'].'" />';
echo '<input name="date_debut" type="hidden" value="'.$_POST['date_debut'].'" />';
echo '<input name="date_fin" type="hidden" value="'.$_POST['date_fin'].'" />';
echo '<center><input type="submit" value="VALIDE" id="button" /></center></form> ';

echo '<form method="POST" action="modifie_manifestation.php?id='.$id.'">';
echo '<center><input type="submit" value="Retour" id="button" /></center></form> ';


?>
</body>
</html>