<?php
	header('Content-Type: text/html; charset=UTF-8');
	
	$link = mysql_connect('localhost','adminSUjpCBH','DMWc-acIGwrP');
	mysql_select_db('currency');
	mysql_set_charset('utf8');

	$query ="SELECT max(time) FROM `eurusd`";
	$result = mysql_query($query);
	echo mysql_result($result, 0);
?>
