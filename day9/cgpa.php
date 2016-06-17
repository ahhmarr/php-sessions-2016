<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>marksheet</title>
</head>
<body>
	<?php 
		$ai="Artificial Intelligence";
		$net="Computer Networks";
		$ds="Data Structure";

		$aiMarks=6.78;
		$netMarks=7.76;
		$dsMarks=8.75;

	 ?>	

	 <table border="1" cellpadding="5">
	 	<tr>
	 		<th>s.no</th>
	 		<th>Subject Name</th>
	 		<th>Marks</th>
	 	</tr>
	 	<tr>
	 		<td>1</td>
	 		<td><?php echo $ai ?></td>
	 		<td><?php echo $aiMarks ?></td>
	 	</tr>
	 	<tr>
	 		<td>2</td>
	 		<td><?php echo $net ?></td>
	 		<td><?php echo $netMarks ?></td>
	 	</tr>
	 	<tr>
	 		<td>3</td>
	 		<td><?php echo $ds ?></td>
	 		<td><?php echo $dsMarks ?></td>
	 	</tr>
	 </table>

</body>
</html>