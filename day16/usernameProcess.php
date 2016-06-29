<?php 
include_once '../connect.php';
$name=$_GET['name'];
$query="select * from users where username like '%$name%'";
$res=mysqli_query($connect,$query);
$ans=mysqli_fetch_assoc($res);
// var_dump($ans);
?>
<?php if($ans) : ?>
<table border="1">
	<tr>
		<td>username</td>
		<td><?php echo $ans['username'] ?></td>
	</tr>
	<tr>
		<td>password</td>
		<td><?php echo $ans['password'] ?></td>
	</tr>
</table>
<?php else: ?>
	no record found
<?php endif; ?>