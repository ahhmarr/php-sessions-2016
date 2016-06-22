<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register form</title>
</head>
<body>
	<form action="pregProcess.php" method="post" enctype="multipart/form-data">
	<div>
		<label for="image">Image</label>
		<input type="file" name="image" id="image">
	</div>
	<div>
		<label for="name">full name</label>
		<input type="text" name="name" id="name">
	</div>
	<div>
		<label for="name">DOB</label>
		<select name="day">
			<option>Day</option>
			<?php 
   				for($x=1;$x<=31;$x++)
				{
					echo "<option>$x</option>";
				}

			 ?>
		</select>
		<select name="month">
			<option>month</option>
			<?php 
   				dynamicOptionTag(1,12)
			 ?>
		</select>
		<select name="year">
			<option>year</option>
			<?php 
   				dynamicOptionTag(1900,2016)
			 ?>
		</select>
	</div>
	<div>
		<label for="email">email</label>
		<input type="email" name="email" id="email">
	</div>
	<div>
		<input type="submit" value="Register User">
	</div>
	</form>
</body>
</html>
<?php 
	function dynamicOptionTag($first,$last){
		for($x=$first;$x<=$last;$x++)
		{
			echo "<option>$x</option>";
		}

	} 

	?>