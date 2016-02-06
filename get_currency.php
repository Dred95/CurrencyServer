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
	

	if (mysql_num_rows($result) == 0) {
	    echo "No rows found, nothing to print so am exiting";
	    exit;
	}
	
	while ($row = mysql_fetch_assoc($result)) {
		var_dump($row);
		echo "<br>".$row["time"];
		echo $row["bid"];
		echo $row["ask"]."<br>";
	}
?>

