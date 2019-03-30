<?php
session_start();
if (!isset($_SESSION['access_token'])) {
	header('location:login.php');
	exit();
}
//print_r($_SESSION);
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
<style type="text/css">
	.derecha{
	text-align:right;
	margin-top:10px; 
}

</style>

<body>
	<header>
		<div class="derecha" >		
		<a href="logout.php" class="btn btn-success btn-lg"  >Cerrar sesión</a>
		</div>
	</header>
	<div class="container" style="margin-top: 100px" >
		<div class="row" >
			<div class="col-md-3" >
				<img style="width:80%"  src="<?php echo $_SESSION['picture']; ?>">	
			</div>
			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['id']; ?></td>
						</tr>
						<tr>
							<td>Nombre</td>
							<td><?php echo $_SESSION['givenName']; ?></td>
						</tr>
						<tr>
							<td>Apellido</td>
							<td><?php echo $_SESSION['familyName']; ?></td>
						</tr>
						<tr>
							<td>Correo</td>
							<td><?php echo $_SESSION['email']; ?></td>
						</tr>
						<tr>
							<td>Genero</td>
							<td><?php echo $_SESSION['gender']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>
	</div>
    
</body>
</html>