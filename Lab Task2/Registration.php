<!DOCTYPE html>
<html>
<head>
<title>Doctor_Registration</title>
</head>
<body>
  <?php 
  $firstnameErrMsg =$passwordErrMsg=$usernameErrMsg= $lastnameErrMsg = $genderErrMsg = $mobileErrMsg = $QualificationErrMsg = "";
  $registrationStatus="";
  $errorcount=0;
  $count=0;
  
  if ($_SERVER['REQUEST_METHOD'] === "POST") {

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $First_Name = test_input($_POST['firstname']);
    $Last_Name = test_input($_POST['lastname']);
    $Mobile_no = test_input($_POST['mobile_no']);
    $Gender = isset($_POST['gender']) ? test_input($_POST['gender']):NULL;
    $Qualification = isset($_POST['Qualification']) ? test_input($_POST['Qualification']):NULL;
    $Password = test_input($_POST['password']);
    $Username = test_input($_POST['username']);
    if(empty($First_Name)){
      $firstnameErrMsg = "First Name is Empty";
      $errorcount++;
    }
    else{
      if (!preg_match("/^[a-zA-Z-' ]*$/",$First_Name)) {
        $errorcount++;
        $firstnameErrMsg = "Only letters and spaces";
      }}
    if(empty($Last_Name)){
      $lastnameErrMsg = "Last Name is Empty";
      $errorcount++;
    }
    else {
      if (!preg_match("/^[a-zA-Z-' ]*$/",$Last_Name)) {
        $errorcount++;
        $lastnameErrMsg = "Only letters and spaces";
      }
    }
    if(empty($Gender)){
      $genderErrMsg = "Gender is Empty";
      $errorcount++;
    }
    if(empty($Password)){
      $passwordErrMsg = "Password is Empty";
      $errorcount++;
    }
    if(empty($Username)){
      $usernameErrMsg = "Username is Empty";
      $errorcount++;
    }
    if(empty($Qualification)){
      $QualificationErrMsg = "Qualification is Empty";
      $errorcount++;
    }
    if(empty($Mobile_no)){
      $mobileErrMsg = "Mobile  is Empty";
      $errorcount++;
    }
    if($errorcount==0){
      if(filesize("data.json")<=0){
      $arr = array(array('firstname' => $First_Name, 'lastname' => $Last_Name ,'gender' => $Gender,'mobile_no'=>$Mobile_no,'password'=>$Password,'username'=>$Username));
      $f = fopen("data.json", "a");
      fwrite($f, json_encode($arr));
      fclose($f);
      }
      else if(filesize("data.json")>0){
      $arr2 = array('firstname' => $First_Name, 'lastname' => $Last_Name ,'gender' => $Gender,'mobile_no'=>$Mobile_no,'password'=>$Password,'username'=>$Username);
      $f = fopen("data.json", 'r');
      $s = fread($f, filesize("data.json"));
      $data = json_decode($s);
      array_push($data, $arr2);
      fclose($f);
      $f = fopen("data.json", "w");
      fwrite($f, json_encode($data));
      fclose($f);
      }

      $registrationStatus="Registration Successfull";
    }

    else{
      $registrationStatus="Registration failed";
    } 
  }   
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate>
  
    <label for="fname">First Name:</label>
    <input type="text" name="firstname" id="fname">
    <span style="color: black">*
    <?php
      echo $firstnameErrMsg;
    ?>
    </span>
    <br><br>
    <label for="lname">Last Name:</label>
    <input type="text" name="lastname" id="lname">
    <span style="color: black">*
    <?php
      echo $lastnameErrMsg;
    ?>
    </span>
    <br><br>
    <label>Gender</label>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>
    <span style="color: black">*
    <?php
      echo $genderErrMsg;
    ?>
    </span>
    <br><br>
    <label for="mno">Mobile No</label>
    <input type="number" name="mobile_no" id="mno">
    <span style="color: black">*
    <?php
      echo $mobileErrMsg;
    ?>
    </span>
    <br><br>
    <label for="Qualification">Qualification</label>
    <input type="radio" id="MBBS" name="Qualification" value="MBBS">
    <label for="MBBS">MBBS</label>
    <input type="radio" id="FCPS" name="Qualification" value="FCPS">
    <label for="FCPS">FCPS</label>
    <input type="radio" id="BCS" name="Qualification" value="BCS">
    <label for="BCS">BCS</label>
    <span style="color: black">*
    <?php
      echo $QualificationErrMsg;
    ?>
    </span>
    <br><br>
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <span style="color: black">*
    <?php
      echo $usernameErrMsg;
    ?>
    </span>
    <br><br>
    <label for="password">New password</label>
    <input type="password" name="password" id="password">
    <span style="color: black">*
    <?php
      echo $passwordErrMsg;
    ?>
    </span>

  <br>
  <input type="Submit" value="Registration">
</form>
<h1><?php
      echo $registrationStatus;
?></h1>
<br>
<form action="Login.php">
  <label >Already have an account? To log in</label>
  <input type="Submit" value="Click here">
</form>
</body>
</html>
