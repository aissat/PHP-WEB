<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>Ajoute Une Manifestation</title></head>
<body>

<?php

include_once('../core/DB.php');
echo '<center>';
if(!empty($_POST['nom_manifestation'])  && !empty($_POST['date_debut'])  && !empty($_POST['date_fin']) )
{
	$DB = new DB();

	$objRequest = new stdClass();
	$objRequest->nom_manifestation  = $_POST['nom_manifestation'];
	$objRequest->date_debut = $_POST['date_debut'];
	$objRequest->date_fin = $_POST['date_fin'];
	
	if($DB->insert_record('manifestation',$objRequest))
	{
		echo '<center>manifestation ajouté.</center>';
		header("Location: filtrer_manifestation.php");
	}
	else
	{
		echo '<center>article n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	}
	$DB->disconnect();
}
else echo '<center>Remplir les champs.</center>';
echo '</div>';
echo '</center>';


?>