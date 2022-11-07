<?php include('header.php');
include('../Controller/prescriptionAction.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pescription</title>
</head>
<body>

	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>
	<h3><a href="../Controller/logout.php">Logout</a></h3>
	<br>

	<form method="post" action="../Controller/prescriptionAction.php">
	<fieldset>
			<legend>Search Patient Prescription</legend>

			<label>Enter patient username to search prescription: </label>	
			<input type="text" name="username" required value="" >
			<input type="submit" name="submit" value="Print Prescription">
		
	</fieldset>
	</form>


</body>
</html>
