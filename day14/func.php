<?php 

$customDateTime='2016-10-01 10:12 am';
$obj=strtotime($customDateTime);
// echo date('d/M/Y',$obj);
//
$unec='a';
echo $unec;
$enc=md5($unec);
echo '<br>'.$enc;