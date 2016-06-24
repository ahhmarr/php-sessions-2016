<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registration form</title>
</head>
<body>
	<form action="registerUser.php" method="post">
		<div>
			<label for="username">username</label>
			<input type="text" name="username" id="username">
		</div>
		<div>
			<label for="password">password</label>
			<input type="password" name="password" id="password">
		</div>
		<div>
			<label for="dob">dob</label>
			<input type="date" name="dob" id="dob">
		</div>
		<div>
			<label for="name">name</label>
			<input type="text" name="name" id="name">
		</div>
		<div>
			<input type="submit" value="register">
		</div>
	</form>
</body>
</html>