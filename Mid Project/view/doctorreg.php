<?php
include('header.php');
include('../Controller/regAction.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>

	<form method="post" action="../Controller/regAction.php" novalidate>
	        <fieldset>
			<legend>Doctor Registration Form</legend>
			
			<label>Frist Name:</label>
			<input type="text" name="fname" required value = "<?php echo $firstname; ?>">

			<br><br>

			<label>Last Name:</label>
			<input type="text" name="lname" required value = "<?php echo $lastname; ?>">

			<br><br>

			<label>Gender:</label>
			<input type="radio" id="Male" name="gender" value="male">
			<label for="Male">Male</label>
			<input type="radio" id="Female" name="gender" value="Female">
			<label for="Female">Female</label>

			<br><br>

			<label>Date of Birth:</label>
			<input type="Date" name="dob" required value = "<?php echo $dob; ?>">

			<br><br>

			<label>Address:</label>
			<input type="text" name="address" required value = "<?php echo $address; ?>">
			
			<br><br>

			<label>Phone Number</label>
			<input type="Number" name="phone" required value = "<?php echo $phone; ?>">

			<br><br>

			<label>Degree</label>
			<input type="radio" name="degree"  value = "mbbs">
			<label for="mbs">MBBS</label>

			<input type="radio" name="degree"  value = "Fcps">
			<label for="Fcps">Fcps</label>


			<input type="radio" name="degree"  value = "Orthopedics">
			<label for="mbs">Orthopedics</label>

			<input type="radio" name="degree"  value = "Others">
			<label for="mbs">Others</label>

			<br><br>
			<label>Speciality</label>
			<input type="radio" name="Speciality"  value = "Surgeon">
			<label for="mbs">Surgeon</label>

			<input type="radio" name="Speciality"  value = "Medicine">
			<label for="mbs">Medicine</label>



			</fieldset>

			<br><br>
			<fieldset>
			<label>Username</label>
			<input type="text" name="uname" required value = "<?php echo $uname; ?>">
			<br><br>

			<label>Password</label>
			<input type="text" name="pass" required value = "<?php echo $pass; ?>">
			<br><br>
			<input type="submit" name="submit" value="Registration">
			</fieldset>

			<br><br>
			<br><br>

			<p>Already have an account?</p>
			<a href="login.php">Click here for Log in!</a>

		

	</form>


</body>
</html>

