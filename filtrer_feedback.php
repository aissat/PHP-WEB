<!doctype html>
<link rel="stylesheet" type="text/css" href="./style/style.css"/>
<meta charset="UTF-8">
<html>
<head><title>Tous les Feedback</title></head>
<body>
<div>
<?php
if (file_exists('./core/DB.php')) 
	{
		require_once('./core/DB.php');
	}
//
	$DB = new DB();
	$data = new stdClass();
	$dataTab = array();

	$dataTab =(array)$DB->get_array_id('feedback');
	$nbrAccount = sizeof($dataTab);

	echo'<center>';
	echo '<div id="eltList"><h2>list des Feedback : </h2></div>';

	for($i=0; $i<$nbrAccount; $i++)
	{// id 14-15 mekach = error  hhhhhhh
		$data = $DB->get_recordById('feedback',$dataTab[$i]);

		echo '<div id="eltList"><b>Email de Contact : </b>'.'<br>'.$data->email.'<br>';
		echo '<b>Message de Contact : </b>'.'<br>'.$data->message.'<br>';
		echo '<div id="button"><a href="supprime_feedback.php?id='.$data->id.'"><p>Supprime</p></a></div></div>';

	}
	echo '</form>'; 
	echo'</center>';
	// form to update ....
	
	$DB->disconnect();
?>
</div>
</body>
</html>