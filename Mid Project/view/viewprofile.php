<?php include('./header.php'); 
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Profile</title>
</head>
<body>

	

<br>

	<h3 align="center"> <?php if(isset($_SESSION['up'])) {echo $_SESSION['up'];} ?> </h3>

	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>
	
	<br>

	<a href="editprofile.php">Click here to update profile.</a>

</body>
</html>

