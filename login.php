<?php
require_once "config.php";

if (isset($_SESSION['access_token'])) {
	header('location:index.php');
	exit();
}

$loginURL=$gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="container" style="margin-top: 100px" >
		<div class="row justify-content-center" >
			<div class="col-md-6 col-offset-3" align="center">
				<img src="login.png"><br><br>
				<form >
					<input placeholder="Email..." name="email" class="form-control"><br>
					<input type="password" placeholder="password..." name="password" class="form-control"><br>
					<input type="submit" value="Log in" class="btn btn-primary">
					<input type="button" onclick="window.location= '<?php echo $loginURL ?>';" value="Log in With Google" class="btn btn-danger">
				</form>	
			</div>
		</div>
	</div>
    
</body>
</html>