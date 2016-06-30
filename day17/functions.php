<?php 
$arr=[
'ip'  => '192.168.10.2',
'name' => 'john doe',
'age' => 32

];
extract($arr);
$game='call of duty';
$username ='@ahhmarr';
$details=compact('game','username');
var_dump($details);
echo $details['username'];
$h=<<<HTML
 <strong> 
  http://twitter.com/$username
 </strong>
 <br>
 <strong>
 	playing game  : $game
 </strong>
HTML;

echo $h;
