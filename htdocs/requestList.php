<?php
include 'constants.php';
include 'support.php';
include 'secure.php';

if (!isset($_GET['q']))
{
	$_GET['q'] = "";
}

$subDir = substr($_GET['q'], 0, 4);
$dir = $__ARCHIVE_LOCATION . $subDir . "/";

if (!is_dir($dir)) { echo($__ARCHIVE_OPEN_FAILED); exit;}

if ($handle = opendir($dir))
{
	echo("Matched Files:<br />\n");
	$count = 0;
	echo("<table border='0'><tr><td><strong>File</strong></td><td><strong>Last Modified</strong></td></tr>");
	while (false !== ($file = readdir($handle))) 
	{
    	if (startsWith($file, $_GET['q']))
		{
			$count++;
			echo("
			<tr>
				<td><a href='http://" . $__LOCAL_IP . "/request.php?file=" . $file . "&s=" . $__SECURE_STR . "'>" . $file . " </a></td>
				<td> " . date("F d Y H:i:s.", filemtime($dir . $file)) . "</td>
			</tr>
			\n");
		} 
    }
	echo("</table>");
	if ($count == 0)
	{
		echo($__NO_FILES_FOUND);
	}
}
else
{
	echo($__ARCHIVE_OPEN_FAILED);
}

?> 
