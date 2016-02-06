<?php 
	ini_set('display_errors','On');
	error_reporting(E_ALL &~ E_DEPRECATED);

	header('Content-Type: text/html; charset=UTF-8');
	
	$lastTime = $_GET["time"];
	if (!$lastTime)
	{
		$lastTime = 0;
	}
	
	if (!is_numeric($lastTime))
	{
		$lastTime = 0;
	}
	
	$link = mysql_connect('localhost','adminSUjpCBH','DMWc-acIGwrP');
	mysql_select_db('currency');
	mysql_set_charset('utf8');

	$query ="SELECT * FROM  `eurusd` WHERE TIME >".$lastTime;
	$result = mysql_query($query);
	var_dump($result);
?>

