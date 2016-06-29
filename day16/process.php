<?php 

function genCert()
{
	$man=$_GET['man'];
	$woman=$_GET['woman'];
	$pos=strrpos($man,' ');
	$title=substr($man,$pos);
	// echo $title;
	$couple='Mr. & Mrs'.$title;
	return 'Welcome '.$couple;
}
echo genCert();