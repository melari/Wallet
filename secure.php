<?php
/*
include 'constants.php';
include 'support.php';
*/

//Checks that the client provided the correct passphrase to access Wallet with.
$fh = fopen($__SECURE_LOCATION, 'r');
$real = fread($fh, filesize($__SECURE_LCATION));
fclose($fh);

if ($_GET['s'] != $real)
{
	redirect("message.php?mes=Invalid security credentials.");
}
?>
