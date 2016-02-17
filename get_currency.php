<?php 
	ini_set('display_errors','On');
	error_reporting(E_ALL &~ E_DEPRECATED);

	header('Content-Type: text/html; charset=UTF-8');
	
	$lastTime = $_GET["time"];
	$limit = $_GET["limit"];
	if (!$lastTime)
	{
		$lastTime = 0;
	}
	
	if (!is_numeric($lastTime))
	{
		echo "1";
		exit;
	}
	if (!$limit)
	{
		$limit = 100;
	}
	
	if (!is_numeric($limit))
	{
		echo "2";
		exit;
	}
	
	$link = mysql_connect('localhost','adminSUjpCBH','DMWc-acIGwrP');
	mysql_select_db('currency');
	mysql_set_charset('utf8');

	$query ="SELECT * FROM  `eurusd` WHERE TIME >".$lastTime." ORDER BY  `time` ASC LIMIT ".$limit;
	$result = mysql_query($query);
	

	if (mysql_num_rows($result) == 0) {
	    echo "2";
	    exit;
	}
	$row = mysql_fetch_assoc($result);
	echo $row["time"].",";
	echo $row["bid"].",";
	echo $row["ask"];
	
	while ($row = mysql_fetch_assoc($result)) {
		echo ";".$row["time"].",";
		echo $row["bid"].",";
		echo $row["ask"];
	}
?>

