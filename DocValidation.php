<?php

$validatename="";

$validateage="";

$validategender="";


$validatecheckbox="";

$validateradio="";

$validatepassword="";

$v1=$v2=$v3="";

$name=$age=$gender=$contact=$qualification="";

if($_SERVER["REQUEST_METHOD"]=="POST")

{

if(empty($_REQUEST["name"]) || (strlen($_REQUEST["name"])<6))

   {

      $validatename= "you must enter a different Name";

   }

else

   {

       $name=$_REQUEST["name"];

   }

if(isset($_REQUEST["age"]))

   {
       $validateage= $_REQUEST["age"];
   }

else
   {
       $validatereage= "please enter age";
   }
if(isset($_REQUEST["gender"]))

   {
       $validategender= $_REQUEST["gender"];
   }

else
   {
       $validateregender= "Enter your gender";
   }
   if(empty($_REQUEST["contact"]) || (strlen($_REQUEST["contact"])<11))
   {
      return false;
   } 
 else 
   {
       return true;
    }
    if(isset($_REQUEST["Qualification"]))

    {
        $validateQualification= $_REQUEST["Qualification"];
    }
 
 else
    {
        $validatereQualification= "Qualification";
    }


}

?>