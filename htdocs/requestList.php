<?php
include 'constants.php';
include 'support.php';
include 'secure.php';

if (!isset($_GET['q']))
{
	$_GET['q'] = "";
}

if ($handle = opendir($__ARCHIVE_LOCATION))
{
	echo("Matched Files:<br />\n");
	$count = 0;
	while (false !== ($file = readdir($handle))) 
	{
    	if (startsWith($file, $_GET['q']))
		{
			$count++;
			echo("<a href='http://" . $__LOCAL_IP . "/request.php?file=" . $file . "&s=" . $__SECURE_STR . "'>" . $file . "</a><br />\n");
		} 
    }
	if ($count == 0)
	{
		echo($__NO_FILES_FOUND);
	}
}
else
{
	echo("Failed to open archive.");
}

?> 
