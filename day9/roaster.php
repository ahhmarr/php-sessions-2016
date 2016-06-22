<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>marksheet</title>
	<style type="text/css">
		tr{
			background-color: #ccc;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="5">
	<?php 
		$number=105;
		for($x=1;$x<=10;$x++)
		{
			echo '<tr>';
			echo "<td> $number X $x =";
			echo ($number*$x);
			echo "</td>";
		}
	?>
	</table>
</body>
</html>