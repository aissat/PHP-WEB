
<meta charset="UTF-8">
<?php

include_once('core/GUI.php');

echo '<div>';

$GUI = new GUI();
echo '<center>';
echo '<form action="feedback_save.php" method="POST" >'.
$GUI->lineEdit('email','text','exemple@email.com','textfield').'<br>'.
$GUI->textArea('message','text','message de 255 caractere au Max','textarea').'<br>'.
$GUI->pushButton('envoyer feedback >>','button');
echo '</form>';
echo '</center>';

?>