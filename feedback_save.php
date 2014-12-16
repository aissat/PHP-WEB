
<?php

include_once('core/DB.php');
include_once('core/GUI.php');
$DB = new DB();

$objRequest = new stdClass();
$objRequest->email  =$_POST['email'];
$objRequest->message=$_POST['message'];


if($DB->insert_record('feedback',$objRequest))
{
	echo '<center>merci a votre support, ton message eest envoyer.</center>';
	//header("Location: index.php");
}
else
{
	echo '<center>message n\'est pas envoyer reessayer.</center>';
}

$DB->disconnect();
echo '</div>';

echo '<a href="index.php">OK</a>';

?>