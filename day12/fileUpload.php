<?php 

// var_dump($_POST);
var_dump($_FILES);
$fileName=$_FILES['upload_file']['name'];
$size=$_FILES['upload_file']['size'];
$sizeInMB=($size/(1024*1024));
echo 'file size in KB'.$sizeInMB;
if($sizeInMB>1){
	echo 'ERROR::file should not exceed 1 MB';
	exit;
}
$tempLocation=$_FILES['upload_file']['tmp_name'];
$newLocation='../images/'.rand(1000,9999).$fileName;

echo "the temp location : $tempLocation the permanent location : $newLocation";

$status=move_uploaded_file($tempLocation,$newLocation);

var_dump($status);







