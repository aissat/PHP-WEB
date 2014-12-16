<!doctype html>
<link rel="stylesheet" type="text/css" href="./style/style1.css"/>
<meta charset="UTF-8">
<html>
<head><title>login admin</title></head>
<body>

<?php
echo '<center>';
include_once('core/GUI.php');

$GUI = new GUI();
echo '<div id="formAdd"><form action="tryLogin.php" method="POST" >'.
$GUI->lineEdit('email','text','exemple@email.com','textfield').'<br>'.
$GUI->lineEdit('password','password','password','textfield').'<br>'.
$GUI->pushButton('Login >>','button');
echo '</form></div>';
echo '<br><br><br>';
  if (!empty($_GET['msg'])) echo '<b style="color:red; font-size:18px;">'.$_GET['msg'].'</b>';
?>

</body>
</html>