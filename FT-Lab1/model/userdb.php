<?php

$con = mysqli_connect('localhost', 'root', '', 'data');
function login_check($username,$password,$email)
{
   

 
    $con = mysqli_connect('localhost', 'root', '', 'data');
    $sql = "select * from signup where username= '{$username}' and password = '{$password}' and email='{$email}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0)
        return true;
    
    else return false;
}
function insertUser($username, $password, $email)
{
    $con = mysqli_connect('localhost', 'root', '', 'data');
    $sql = "insert into user (username, password, email) values ('{$username}', '{$password}', '{$email}' ) ";


    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0)
        return true;
    
    else return false;

}
?>