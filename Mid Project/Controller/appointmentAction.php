<?php  
session_start();

	$username = "";
	
	if($_SERVER['REQUEST_METHOD'] === "POST")
	{
		function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$username = test_input($_POST['username']);

			$message = "";
			if(empty($username)){
				$message .= "Insert username to search";
				$message .= "<br>";
			}

			if($message === "")
			{
				$f = fopen("../model/appointment.json", 'r');

				$s = fread($f, filesize("../model/appointment.json"));

				$data = json_decode($s);
				

				

				echo "<table border=1>";
				echo "<tr>";
				echo "<th>Patient Name</th>";
				echo "<th>Appointment Date</th>";
				echo "<th>Appointment Time</th>";
				echo "<th>Doctor Name</th>";
				echo "</tr>";
				




				for($i=0; $i<sizeof($data); $i++)
				{
					$check = $data[$i]->username;
					if($check === $username){

						echo "<tr>";
						echo "<td>" . $data[$i]->pname . "</td>";
						echo "<td>" . $data[$i]->date . "</td>";
						echo "<td>" . $data[$i]->time . "</td>";
						echo "<td>" . $data[$i]->username . "</td>";
						echo "</tr>";
					}
				}

				echo "</table>";
				

				fclose($f);



			}
			else
			{
				echo $message;
			}

	}

?>



