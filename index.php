<!doctype html>

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

<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>247no.de</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<div id="main">
			<div class="container">
			<form data-toggle="validator" role="form" novalidate="true">
				<div class="form-group has-error has-danger">
					<label for="inputName" class="control-label">IP</label>
					<input type="text" class="form-control" id="inputName" placeholder="<?php echo $ip ?>" required="">
				</div>
				<div class="form-group has-feedback">
					<label for="inputTwitter" class="control-label">URL</label>
					<div class="input-group">
						<span class="input-group-addon">http://247no.de/</span>
						<input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="someURL" required="">
					</div>
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block with-errors">
						Hey look, this one has feedback icons!
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="control-label">Email</label>
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="control-label">Password</label>
					<div class="form-inline row">
						<div class="form-group col-sm-6">
							<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required="">
							<div class="help-block">
								Minimum of 6 characters
							</div>
						</div>
						<div class="form-group col-sm-6">
							<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required="">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="radio">
						<label>
							<input type="radio" name="underwear" required="">
							Boxers </label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="underwear" required="">
							Briefs </label>
					</div>
				</div>
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
							AGB </label>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary disabled">
						Submit
					</button>
				</div>
			</form>
			</div> <!-- container -->
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="js/assets/validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>