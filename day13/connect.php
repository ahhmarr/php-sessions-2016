<?php 

//localhost
//root
//123456
//session_2016
$connect=mysqli_connect('localhost','root','123456','session_2016');
// var_dump($connect);
// echo mysqli_errorno();
$query="select * from index_users ";
$result=mysqli_query($connect,$query);
while($ans=mysqli_fetch_assoc($result)){
	echo $ans['fname'].' '.$ans['address'].' '.$ans['index'].'<br>';
}