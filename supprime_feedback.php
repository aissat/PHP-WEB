<?php 

require_once('./core/DB.php');
$DB = new DB();
$DB->delete_recordByID('feedback',$_GET['id']);
$DB->disconnect();
header( "Location: filtrer_feedback.php" );

?>
