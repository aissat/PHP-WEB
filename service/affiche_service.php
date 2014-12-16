<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>affiche services</title></head>
<body>
	
<?php
// affiche
$id = $_GET['id'];

echo  '<center><div id="formAdd" align="left" ><p><b>nom service : </b>'.$_POST['nom_service'].'</p><br>';
echo '<p><b>Information sur Les services : </b>'.$_POST['info'].'</p><br>';

echo '<form method="POST" action="valide_service.php?id='.$id.'">';
echo '<input name="nom_service" type="hidden" value="'.$_POST['nom_service'].'" />';
echo '<input name="info" type="hidden" value="'.$_POST['info'].'" />';
echo '<center><input type="submit" value="VALIDE" id="button" /></center></form> ';

echo '<form method="POST" action="modifie_service.php?id='.$id.'">';
echo '<center><input type="submit" value="Retour" id="button" /></center></form> ';

?>
</body>
</html>