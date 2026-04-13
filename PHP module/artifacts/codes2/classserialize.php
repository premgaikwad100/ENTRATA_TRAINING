<?php
class abc
{
	var $v1=100;
	var $v2='prem';
	function fn()
	{
		echo "heloo";
	}
}
$obj= new abc();
$ser=serialize($obj);
echo $ser;
$dis=unserialize($ser);
print_r($dis);

?>	
	