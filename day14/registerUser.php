<?php 
require_once '../connect.php';

if(!isset($_POST['username'])){
	echo 'Access Denied';exit;
}
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$password=md5($password);

$query="insert into users (username,password,name,dob) values ('$username','$password','$name','$dob')";
// echo $query;
$result=mysqli_query($connect,$query);
header('location:login.php');

