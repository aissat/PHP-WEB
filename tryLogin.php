<?php

include_once('core/DB.php');
include_once('core/GUI.php');
$DB = new DB();

$objRequest = new stdClass();
$objRequest->email=$_POST['email'];
$objRequest->password=$_POST['password'];

$objRespanse = new stdClass();
$objRespanse = $DB->get_record_where('utilisateur',$objRequest,'AND');
$DB->disconnect();
if(!empty($objRespanse))
{

session_start();
$_SESSION['nom'] = $objRespanse->nom;
$_SESSION['prenom'] = $objRespanse->prenom;
header("Location: espace_admin.php");
}
else  header("Location: login.php?msg=Utilisateur n\'exist pas ");
echo '</center>';
?>