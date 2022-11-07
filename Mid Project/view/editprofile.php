<?php include('header.php'); 
include('../Controller/editAction.php')?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Profile</title>
</head>




<body>

	<br>
	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>



	<form method="post" action="../Controller/editAction.php" novalidate>

		<fieldset>
			<legend>Edit Profile Form</legend>

			<label>First Name:</label>
			<input type="text" name="fname" required value = "<?php ['firstname']; ?>">

			<br></br>

			<label>Last Name:</label>
			<input type="text" name="lname" required value = "<?php ['lastname']; ?>">

			<br></br>

			<label>Address:</label>
			<input type="text" name="address" required value = "<?php ['address']; ?>">
			
			<br></br>

			<label>Phone Number</label>
			<input type="Number" name="phone" required value = "<?php ['phone']; ?>">

			<br></br>

			<input type="submit" name="submit" value="Update">

			<br></br>

			<a href="dashboard.php">Go to dashboard </a>

			

		</fieldset>

	</form>


</body>
</html>
