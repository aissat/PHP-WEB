<!doctype html>
<link rel="stylesheet" type="text/css" href="../style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>tous les articles</title></head>
<body>
	<center>
<div>

<?php

if (file_exists('../core/DB.php')) 
	{
		require_once('../core/DB.php');
	}
//
	$DB = new DB();
	$data = new stdClass();
	$dataTab = array();

	$dataTab =(array)$DB->get_array_id('article');
	$nbrAccount = sizeof($dataTab);

	
	echo '<div id="eltList"><h2>list des article : </h2></div>';

	for($i=0; $i<$nbrAccount; $i++)
	{// id 14-15 mekach = error  hhhhhhh
		$data = $DB->get_recordById('article',$dataTab[$i]);

		echo '<div id="eltList">Titre article : '.$data->titre_article.'<div id="button"><a href="modifie_article.php?id='.$data->id.'"><p>MODIFIE</p></a></div>';
		echo '<div id="button"><a href="supprime_article.php?id='.$data->id.'"><p>DELETE</p></a></div></div>';
	}
	echo '</form>'; 
	// form to update ....
	

	$DB->disconnect();
?>
</div>
</center>
</body>
</html>