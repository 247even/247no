<?php

	$url = $_SERVER["REQUEST_URI"];
	$url = explode("/", $url);
	$target = $url[1];
	echo $target.'<br>';

	// http://test.com/?set=123.456.789.0
	if (isset($_GET['set'])) {
		$setIP = $_GET['set']; 
		echo "setIP = ".$setIP."<br>";
	}

		
	$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
	echo '<a href="http://'.$ip.'">'.$ip.'</a><br>';
	
	
?>