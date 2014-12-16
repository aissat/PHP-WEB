<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>validé modification</title></head>
<body>


<?php
include_once('../core/DB.php');
// save and Gooo .......
$DB = new DB();

$id = $_GET['id'];
$where = new stdClass();
$where->id = $id;

$updated_data = new stdClass();

$updated_data->nom_manifestation  = $_POST['nom_manifestation'];
$updated_data->date_debut = $_POST['date_debut'];
$updated_data->date_fin = $_POST['date_fin'];

if($DB->update_record('manifestation',$updated_data,$where))
{
	//echo '<center>article modifié.</center>';
	
	header("Location: filtrer_manifestation.php");
}
else
{
	echo '<center>manifestation n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	// header("Location : ");
}

?>
</body>
</html>