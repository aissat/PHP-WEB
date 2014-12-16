<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">

<html style="font-family:Ubuntu">
<head><title>modifié Manifestation</title></head>
<body>

<?php
echo '<center>';
include_once('../core/DB.php');
include_once('../core/GUI.php');
$id = $_GET['id'];

$where = new stdClass();
$where->id = $id;

$DB = new DB();

$updated_data = new stdClass();
$updated_data = $DB->get_record_where('manifestation',$where);

echo '<div>';

$GUI = new GUI();
echo '<form action="affiche_manifestation.php?id='.$id.'" method="POST" >'.
$GUI->lineEdit('nom_manifestation','text','Nom de Manifestation','textfield',$updated_data->nom_manifestation).'<br>'.
$GUI->lineEdit('date_debut','text','date debut : YYYY-MM-','textfield',$updated_data->date_debut).'<br>'.
$GUI->lineEdit('date_fin','text','date fin : YYYY-MM-','textfield',$updated_data->date_fin).'<br>'.
$GUI->pushButton('Verifie >>','button');
echo '</form>';

$DB->disconnect();
echo '</div>';
echo '</center>';

?>

</body>
</html>