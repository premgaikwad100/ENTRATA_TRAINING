<?php
class abc
{
	var $pi=3.14;
	var $pi2=3.14;
	
	function disp()
	{
		echo "in class abc";
	}
	function hi()
	{
		echo "hi";
	}
}
class bcd extends abc
{
		function show()
		{
			echo "in class bcd";
		}
}
$obj=new bcd();
if(class_exists('abc'))
{
	echo "yes class exists";
}
$arr=get_class_methods('abc');
print_r($arr);
$arr1=get_class_vars('abc');
print_r($arr1);
$pr=get_parent_class('bcd');
echo $pr;	
var_dump($obj);
?>		
	