<?php 

//normal text with html

/*echo "<b>some valid html</b>";
echo htmlentities('<b> same html text </b>');*/
$arr=[
'lat' => '101023.45634',
'lon' => '234598.45634',
'ip' => '165.234.21.101',
'country'=>[
  		'name' => 'India',
  		'ISO_name' => 'IN',
  		'Continent'=> 'ASIA'
	]
];
$json=json_encode($arr);
// echo $json;
$backToArray=json_decode($json);


// var_dump($backToArray);


echo 'the line no at which it is called'. __LINE__;
function someOtherFunction($arg){

echo 'the function name :'.__FUNCTION__;
}
someOtherFunction(1);
echo '<br>';
echo 'the file path is'.__FILE__;


echo 'the directory name '.__DIR__;


