<?php 
	//ini_set('display_errors','On');
	//error_reporting(E_ALL &~ E_DEPRECATED);
	header('Content-Type: text/html; charset=UTF-8');
	
	$link = mysql_connect('localhost','adminSUjpCBH','DMWc-acIGwrP');
	mysql_select_db('currency');
	mysql_set_charset('utf8');

	$query ="SELECT `value` FROM `eurusdprediction` ORDER BY `time`";
	$result = mysql_query($query);
	echo mysql_result($result, 0);
	echo mysql_result($result, 1);
	if ($result != 1)
	{
		echo "error".mysql_error($link);
	}else
	{
		echo $result;
	}
?>

