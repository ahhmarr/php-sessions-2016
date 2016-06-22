<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>student register</title>
</head>
<body>
	<form action="register.php" method="post">
		<div>
			<label for="full_name">Full name</label>
			<input required type="text" name="full_name" id="full_name">
		</div>
		<div>
			<label for="course">course</label>
			<select name="course" id="course">
				<option value="bca">B.C.A</option>
				<option value="bsc">B.Sc.</option>
				<option value="bcom">B.Com</option>
			</select>
		</div>
		<div>
			<label for="dob">date of birth</label>
			<input type="date" name="dob" id="dob">
		</div>
		<div>
			<label for="av10">Average on 10th</label>
			<input required type="number" name="av10" id="av10">
		</div>
		<div>
			<label for="av12">Average on 12th</label>
			<input required type="number" name="av12" id="av12">
		</div>
		<div>
			<input type="submit" value="Register">
			<input type="reset">
		</div>
	</form>
</body>
</html>