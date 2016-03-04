<?php 
	//ini_set('display_errors','On');
	//error_reporting(E_ALL &~ E_DEPRECATED);
	header('Content-Type: text/html; charset=UTF-8');
	
	$link = mysql_connect('localhost','adminSUjpCBH','DMWc-acIGwrP');
	mysql_select_db('currency');
	mysql_set_charset('utf8');

	$query ="SELECT `value` FROM `eurusdprediction` ORDER BY `time` DESK LIMIT 0,1";
	$result = mysql_query($query);
	if ($result != 1)
	{
		echo $result."error".mysql_error($link);
	}else
	{
		echo $result;
	}
?>

