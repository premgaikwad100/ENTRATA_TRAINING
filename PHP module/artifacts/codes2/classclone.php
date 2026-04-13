<?php
class abc
{
	function disp()
	{
		echo "in class abc";
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
$obj->disp();
$obj2=clone $obj;
$obj2->show();		
?>		
	