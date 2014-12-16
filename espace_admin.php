
<!doctype html>
<link rel="stylesheet" type="text/css" href="./style/style.css"/>
<meta charset="UTF-8">
<html>
<head><title>espace admin</title></head>
<body>
<a href="logout.php">LOG OUT</a>

<?php

session_start();
$data = new stdClass();
$data->nom = $_SESSION['nom'];
$data->prenom = $_SESSION['prenom'];
echo '<center>';
echo '<center><h1>Bienvenue dans l\'espace Admin :  <br>'. $data->nom.'  '. $data->prenom.'</h1></center>';
echo '</center>';
?>
<center>
<div style="width:60%">

<div id="zoneArticle" align="right">
	<h2><b>Les Articles</b></h2>
	<h5><b><a href="./article/article.php"><p><h3>Ajouté Article<h3></p></a></b></h5>
	<h5><b><a href="./article/filtrer_article.php"><p><h3>Traité les  Articles</h3></p></a></b></h5>
</div>	
<div id="zoneannonces" align="left">
	<h2><b>Les Annonces</b></h2>
	<h5><b><a href="./annonce/annonce.php"><p><h3>Ajouté Annonce</h3></p></a></b></h5>
	<h5><b><a href="./annonce/filtrer_annonce.php"><p><h3>Traité les Annonces</h3></p></a></b></h5>
</div>	
<div id="zoneManifistaion" align="left">
	<h2><b>Les Manifestaion</b></h2>
	<h5><b><a href="./manifestation/manifestation.php"><p><h3>Ajouté Manifestaion</h3></p></a></b></h5>
	<h5><b><a href="./manifestation/filtrer_manifestation.php"><p><h3>Traité les Manifestaion</h3></p></a></b></h5>
</div>
</div>

<div   style="width:60%">
<div id="zoneClub" align="right">
	<h2><b>Les Club</b></h2>
	<h5><b><a href="./club/club.php"><p><h3>Ajouté Club</h3></p></a></b></h5>
	<h5><b><a href="./club/filtrer_club.php"><p><h3>Traité les Clubs</h3></p></a></b></h5>
</div>	

<div id="zoneService" align="left">
	<h2><b>Les Services</b></h2>
	<h5><b><a href="./service/service.php"><p><h3>Ajouté Service</h3></p></a></b></h5>
	<h5><b><a href="./service/filtrer_service.php"><p><h3>Traité les Service</h3></p></a></b></h5>
</div>	
<div id="zoneFedd" align="left">
	<h2><b>Les Feedback</b></h2>
		<h5><b><a href="./filtrer_feedback.php"><p><h3>Consulter les Feedback</h3></p></a></b></h5>
		</div>	

</div>

</center>

</body>
</html>