<?php

//Redirect the user to the given url. Must be called before any headers are sent.
function redirect($r_url)
{
	$a = "Location: " . $r_url;
	header($a);
}
?>
