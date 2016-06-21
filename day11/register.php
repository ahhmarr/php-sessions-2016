<?php 
if(isset($_POST['full_name'])){
	$fullName=$_POST['full_name'];
	$course=$_POST['course'];
	$dob=$_POST['dob'];
	$av10=$_POST['av10'];
	$av12=$_POST['av12'];
	$status='';
	if($av12<40){
		$status='Rejected';
	}else{
		$status='Accepted';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registe form</title>
</head>
<body>
	<div>
		<h1>Student Register Form</h1>
	</div>
	<p>
		<span>Name</span>
		<span><?php echo $fullName ?></span>
	</p>
	<p>
		<span>D.O.B</span>
		<span><?php echo $dob ?></span>
	</p>
	<p>
		<span>Course Applied For</span>
		<span><?php echo $course ?></span>
	</p>
	<p>
		<span>Status</span>
		<span><?php echo $status ?></span>
	</p>
</body>
</html>
<?php }
else
  echo 'UnAuthorized Access';
 ?>

