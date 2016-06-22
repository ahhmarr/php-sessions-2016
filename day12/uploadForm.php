<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simeple file upload</title>
</head>
<body>
	<form action="fileUpload.php" method="post" enctype="multipart/form-data">
		<div>
			<input type="text" name="name" id="name" placeholder="some text">
		</div>
		<div>
			<input type="file" name="upload_file" id="upload_file">
		</div>
		
		<div>
			<input type="submit" value="Upload the File">
		</div>
	</form>
</body>
</html>