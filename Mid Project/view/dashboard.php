<?php 
session_start();
	//include('authentication.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctor DashBoard</title>


</head>
<body>

	<?php include('./header.php'); ?>
	
<br>
    <fieldset>


	<br>

	<h3><a href="dashboard.php">Homepage</a></h3>


	<h3><a href="../Controller/logout.php">Logout</a></h3>

	<br>

	<h3><a href="changepassword.php">Change Password</a></h3>

	

	<h3><a href="editprofile.php">Update  Profile</a></h3>



	<h3><a href="viewprofile.php">View  Profile</a></h3>


	<h3><a href="notice.php">See Notice</a></h3>

	<h3><a href="prescription.php">See Prescription</a></h3>

	<h3><a href="appointment.php">See appointment</a></h3>

	<h3><a href="discount.php">Recommended Discount</a></h3>



	<h3><a href="search.php">Search Patient</a></h3>

	<h3><a href="payment.php">Take Payment</a></h3>
	
	</fieldset> 
	<br>



</body>
</html>