<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>ajouté services</title></head>
<body>

<?php
include_once('../core/DB.php');
echo '<center>';
if(!empty($_POST['nom_service']) && !empty($_POST['info']))
{
	// connection de basedonne ....
	$DB = new DB();

// cree object qui passe comme parametre a la fonction ...
	$objRequest = new stdClass();
	$objRequest->nom_service  = $_POST['nom_service'];
	$objRequest->info = $_POST['info'];

	if($DB->insert_record('services',$objRequest))
	{
		echo '<center>service ajouté.</center>';
		header("Location: filtrer_service.php");
	}
	else
	{
		echo '<center>service n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	}
	// diconnetc basedonnee .. 
	$DB->disconnect();
}
else echo '<center>Remplir les champs.</center>';
echo '</div>';
echo '</center>';


?>