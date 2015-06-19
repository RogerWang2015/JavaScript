<?php
	$dbConn = mysql_connect('localhost', 'lizard2', 'lizard');

	if (!$dbConn){
		die('Could not connect: ' . mysql_error());
	}
?>