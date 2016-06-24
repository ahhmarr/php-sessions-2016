<?php 
require_once '../connect.php';
if(!isset($_POST['username'])){
	echo 'ERROR ';
	exit;
}
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
$query="select * from users where username='$username' and password='$password'";
$res=mysqli_query($connect,$query);
$row=mysqli_num_rows($res);

if($row==1){
	// echo 'correct username and password';
	$_SESSION['username']=$username;
	header('location:success.php');
}else{
	header('location:login.php');
	echo 'invalid username password';
}
var_dump($_SESSION);