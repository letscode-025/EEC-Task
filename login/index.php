<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(dna.jpg);
			background-size: cover;
			background-position: center;
			}

			.Version{
				color: white;
				margin-left: 450px;

			}
			.welcome{
				color: white;
				
				margin-left: 600px;
			}

			.logout{
				color: white;
				margin-left: 10px;
			}


	</style>
</head>
<body>

	<a href="logout.php" class="logout"><b>Logout</b></a>
	<h1 class="Version">Welcome to Version'21</h1>

	<br>
	<div class="welcome">Hello, <?php echo $user_data['user_name']; ?></div>
</body>
</html>