<?php $url = $_SERVER["REQUEST_URI"];
$url = explode("/", $url);
$target = $url[1];
echo $target . '<br>';

// http://test.com/?set=123.456.789.0
if (isset($_GET['set'])) {
	$setIP = $_GET['set'];
	echo "setIP = " . $setIP . "<br>";
}

$ip = $_SERVER['REMOTE_ADDR'] ? : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? : $_SERVER['HTTP_CLIENT_IP']);
echo '<a href="http://' . $ip . '">' . $ip . '</a><br>';
?>

<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style>
			body {
				padding-top: 50px;
				padding-bottom: 20px;
			}
		</style>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
	<body>
		<script src="js/main.js"></script>
	</body>
</html>