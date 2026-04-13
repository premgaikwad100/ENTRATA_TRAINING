<?php
class abc
{
	const PI=3.14;
	function __call($name,$args)
	{
		if($name=="area")
		{
		switch(count($args))
		{
			case 0:return 0;
			case 1:return self::PI*$args[0]*$args[0];
			case 2:return $args[0]*$args[1];
		}
		}
	}	
}
$circle= new abc();
echo $circle->area(10);
$rect=new abc();
echo $rect->area(10,20);
?>	