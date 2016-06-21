<?php 

$man=$_POST['man'];
$woman=$_POST['man'];
$space=strrpos($man,' ');
echo $man;
$title=substr($man,$space+1);
$string="Mr.&.Mrs.$title";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>wedding certificate</title>
</head>
<body>
	<div>
		<h1>Congratulations!!</h1>
		<h2><?php echo $string ?></h2>
	</div>
</body>
</html>