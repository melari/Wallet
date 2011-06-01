<?php
$filename="../files/" . $_GET['file'];
header("Content-disposition: attachment;filename=$filename");
readfile($filename);
?>
