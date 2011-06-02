<?php
include 'constants.php';
include 'support.php';
include 'secure.php';

if (!isClean($_GET['file']))
{
	redirect("message.php?mes=Invalid file request.");
	exit;
}

$subDir = substr($_GET['file'], 0, 4);
$dir = $__ARCHIVE_LOCATION . $subDir . "/";

if (!is_dir($dir)) { redirect("message.php?mes=" . $__ARCHIVE_OPEN_FAILED); exit; }

$filename= $dir . $_GET['file'];

if (!file_exists($filename)) { redirect("message.php?mes=" . $__FILE_NOT_FOUND); exit; }

header("Content-disposition: attachment;filename=" . $_GET['file']);
readfile($filename);
?>
