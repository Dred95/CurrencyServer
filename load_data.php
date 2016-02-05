<?php 
	ini_set('display_errors','On');
	error_reporting(E_ALL &~ E_DEPRECATED);
	header('Content-Type: text/html; charset=UTF-8');

	$myCurl = curl_init();
	curl_setopt_array($myCurl, array(
			CURLOPT_URL => 'https://quotes.instaforex.com/get_quotes.php?q=eurusd&m=json',
			CURLOPT_TIMEOUT_MS => 3100,
			CURLOPT_RETURNTRANSFER => true
			));
	$response = curl_exec($myCurl);
        curl_close($myCurl);
	
	if (strlen($response)<5)
	{
		exit;
	}

	$json = json_decode ($response, true);

	$link = mysql_connect('localhost','adminSUjpCBH','DMWc-acIGwrP');
	mysql_select_db('currency');
	mysql_set_charset('utf8');

	$query =" INSERT INTO eurusd (time, bid, ask) VALUES(".$json["EURUSD"]["lasttime"].",".$json["EURUSD"]["bid"].",".$json["EURUSD"]["ask"].")";
	$result = mysql_query($query);
	echo $result."<br>";
?>

