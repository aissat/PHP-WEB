<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>ajouté Club</title></head>
<body>

<?php

include_once('../core/DB.php');
echo '<center>';
if(!empty($_POST['nom_club']) )
{
	$DB = new DB();

	$objRequest = new stdClass();
	$objRequest->nom_club  = $_POST['nom_club'];
		
		if($DB->insert_record('clubs',$objRequest))
	{
		echo '<center> Club ajouté.</center>';
		header("Location: filtrer_club.php");
	}
	else
	{
		echo '<center>Club n\'est pas sauvgardé ; <b>reessayer</b>.</center>';
	}
	$DB->disconnect();
}
else echo '<center>Remplir les champs.</center>';
echo '</div>';
echo '</center>';


?>