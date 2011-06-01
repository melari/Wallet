<?php
include 'constants.php';
include 'support.php';
include 'secure.php';

if (!isClean($_GET['file']))
{
	redirect("message.php?mes=Invalid file request.");
	exit;
}

$filename= $__ARCHIVE_LOCATION . $_GET['file'];
header("Content-disposition: attachment;filename=$filename");
readfile($filename);
?>
