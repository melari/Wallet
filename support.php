<?php

//Redirect the user to the given url. Must be called before any headers are sent.
function redirect($r_url)
{
	$a = "Location: " . $r_url;
	header($a);
}

//Checks if haystack begins with needle
function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

//Checks if haystack ends with needle
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    $start  = $length * -1; //negative
    return (substr($haystack, $start) === $needle);
}

//Checks if the file request does not leave the directory.
function isClean($dir)
{
	return !(strstr($dir, "//") === false);
}
?>
