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
		function disp()
		{
			// abc::disp();
			echo "in class bcd";
		}
}
$obj=new bcd();
$obj->disp();		
?>		
	