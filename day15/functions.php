<?php 

function return_something($a='some default param')
{
	return $a;
}
function add_two_num($a,$b)
{
	return $a+$b;
}
function add_two_num_with_default_param($a=10,$b=20)
{
	return $a+$b;
}

function add_n_numbers()
{
	$par=func_get_args();
	$sum=array_sum($par);
	return $sum;
}

function return_array($name,$dob)
{
  $person=[$name,$dob];
  return $person;
}
echo return_something();
echo '<br>';
echo add_two_num(100,10);
echo '<br>';

echo add_two_num_with_default_param(-1010,9999);
echo '<br>';
echo add_two_num_with_default_param(76);
echo '<br>';
echo add_two_num_with_default_param();
echo '<br>';
$stringVariable='add_two_num_with_default_param';
echo call_user_func('return_something');
echo '<br>';
echo call_user_func($stringVariable);
echo '<br>';
echo add_n_numbers(1,2,3);
echo '<br>';
echo add_n_numbers(1,2,3,-100,10,35,76,99,110);
echo '<br>';
//serialization
$arr=[
'first_name' => 'john',
'age'    =>34,
15    => 25,
'sub_array'  => [81,43]
];
$a=serialize($arr);
echo $a;
echo '<br>';
$unser=unserialize($a);
echo $unser['first_name'];
echo '<br>';
$returnVariable=return_array('rahul','01/01/1990');
// var_dump($returnVariable);
list($name,$dob)=$returnVariable;
echo $name.' '.$dob;







