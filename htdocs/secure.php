<?php
/*
include 'constants.php';
include 'support.php';
*/

//Checks that the client provided the correct passphrase to access Wallet with.
$fh = fopen($__SECURE_LOCATION, 'r');
$__SECURE_STR = substr(fread($fh, filesize($__SECURE_LOCATION)), 0, 22);
fclose($fh);

if ($_GET['s'] != $__SECURE_STR)
{
	redirect("message.php?mes=Invalid security credentials.");
}
?>
