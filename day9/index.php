<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php document</title>
</head>
<body>
	<p>php text document</p>
	<?php 
		echo '<p>text from the code block</p>';
		$a=12.3;
		$b=10010;
		$avg=($a+$b)/2;
		echo "<center><b>".($a+$b)."</b></center>";
		echo "<i>average = $avg</i>";

	?>
	<br>
	<h1>html code block</h1>

	<?php 
     $control='text from php';
     echo "<ul>";
     	echo "<li>list item  via php </li>";
     echo "</ul>";

	 ?>

	 <input type="text" value="<?php echo $control ?>">
	
</body>
</html>