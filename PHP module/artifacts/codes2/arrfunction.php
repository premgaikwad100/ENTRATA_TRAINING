<?php
$arr=array(10,20,30,40,12,19);
sort($arr);
foreach($arr as $x)
{
	echo " ".$x;
}
$a=array_reverse($arr);
foreach($a as $x)
{
	echo " ".$x;
}
$key=array_search(10,$arr);
echo "key".$key;

$arr1=array("Bunny"=>'Prem');
print_r(array_change_key_case($arr1,CASE_UPPER));

?>