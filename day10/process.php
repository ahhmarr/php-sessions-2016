<?php 


echo 'im alive <br>';
// var_dump($_POST);exit;
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$email=$_POST['email'];
?>
<h1><?php echo "<h1>Hello $firstName $lastName</h1>";	 ?></h1>
