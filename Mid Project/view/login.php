<?
include('../Controller/loginAction.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>

<?php 
	if(isset($_SESSION['status']))
	{
		echo $_SESSION['status'];
	}

	
?>


<?php include('./header.php'); ?>









<body>


	<br>
	<h3 align="center"> <?php if(isset($_SESSION['msg'])) {echo $_SESSION['msg'];} ?> </h3>

	<br>

	<form method="post" action="../Controller/loginAction.php" novalidate>
		<fieldset>


			<legend>Login page</legend>

			<br>
			<h3 align="center"> <?php if(isset($_SESSION['us'])) {echo $_SESSION['us'];} ?> </h3>
			<br>

			<label>Username :</label>
			<input type="text" name="username" required value = "">
			<br><br>
			<label>Password:</label>
			<input type="text" name="password" required value = "">
			<br><br>

			<input type="submit" name="submit" value="Login">
			<br><br>
			<br><br>
			<p>Don't have an account?</p>
			<a href="doctorreg.php">Click here for Sign up!</a>


		</fieldset>

		<br><br>
		<?php

			if(isset($_SESSION['mes'])){
				echo $_SESSION['mes'];
			}
		?>


	</form>


</body>
</html>


