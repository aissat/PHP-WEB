<meta charset="UTF-8">
<?php 
require_once('../core/DB.php');
$DB = new DB();
$DB->delete_recordByID('article',$_GET['id']);
$DB->disconnect();
header( "Location: filtrer_article.php" );
?>
