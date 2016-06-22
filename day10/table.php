<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>array table iteration example</title>
</head>
<body>
<?php 
$table=[
	1				=>12,
	31 				=> 'String value',
	'str_index' 	=> 12.11,
	'another_index' => 'some value'
];
echo '<table border="1" cellPadding="5">';
echo '<tr>';
echo '<th>key</th><th>value</th>';
echo '</tr>';
foreach($table as $key=>$value){
	?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $value ?></td>
	</tr>
<?php 
	}
?>
</table>
</body>
</html>