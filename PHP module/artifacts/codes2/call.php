<?php
class shp
{
	const PI=3.14;
	function __call($name,$arg)
	{
		if ($name=='area')
		{
			switch(count($arg))
			{
				case 0:return 0;
				case 1: return self::PI*$arg[0]*$arg[0];
				case 2:return $arg[0]*$arg[1];
			}
		}
	}
}
$circle=new shp();
echo $circle->area(10);
$rect=new shp();
echo $rect->area(10,20);	
?>