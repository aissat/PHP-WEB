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

$updated_data->nom_club  = $_POST['nom_club'];

if($DB->update_record('clubs',$updated_data,$where))
{
	//echo '<center>article modifié.</center>';
	
	header("Location: filtrer_club.php");
}
else
{
	echo '<center>club n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	// header("Location : ");
}

?>
</body>
</html>