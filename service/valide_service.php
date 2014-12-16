<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>validé modification</title></head>
<body>
service

<?php
include_once('../core/DB.php');
// save and Gooo .......
$DB = new DB();

$id = $_GET['id'];
$where = new stdClass();
$where->id = $id;

$updated_data = new stdClass();

$updated_data->nom_service  = $_POST['nom_service'];
$updated_data->info = $_POST['info'];


if($DB->update_record('services',$updated_data,$where))
{
	//echo '<center>service modifié.</center>';
	
	header("Location: filtrer_service.php");
}
else
{
	echo '<center>service n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	// header("Location : ");
}

?>
</body>
</html>