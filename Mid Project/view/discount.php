<?php include('header.php');
include('../Controller/discountAction.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pescription</title>
</head>
<body>
	<br>
	<h3><a href="../Controller/logout.php">Logout</a></h3>
	<br>

	<form method="post" action="../Controller/discountAction.php">
	<fieldset>
			<legend>Recommended Discount for Patient</legend>

			<label>Enter patient username to prefer discount: </label>	
			<input type="text" name="username" required value="" ><br><br>
			<label>Discount ammount</label>
			<input type="number" name="discount"><br><br>
			<input type="submit" name="submit" value="Print Prescription">
		
	</fieldset>
	</form>


</body>
</html>
