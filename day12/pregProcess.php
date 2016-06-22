<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
// start file upload
$fileName=$_FILES['image']['name'];
$tmpName=$_FILES['image']['tmp_name'];
$newLocation='../images/'.mt_rand(1000,9999).$fileName;
move_uploaded_file($tmpName,$newLocation);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration success page</title>
	<style type="text/css">
		section{
			width:400px;
			float:left;
		}
		section img{
			height:100px;
		}
	</style>
</head>
<body>
	<section id="imageSection">
		<img src="<?php echo $newLocation ?>">
	</section>
	<section>
		<p>
			<span>Name</span>
			<span><?php echo $name ?></span>
		</p>
		<p>
			<span>email</span>
			<span><?php echo $email ?></span>
		</p>
		<p>
			<span>dob</span>
			<span><?php echo "$day/$month/$year" ?></span>
		</p>
	</section>
</body>
</html>