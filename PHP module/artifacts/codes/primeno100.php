<?php
$no=3;
$k=2;
for($i=2;$i<100;$i++)
{
	$flag=true;
	for($j=2;$j<= $i/2;$j++)
	{
		if($i % $j==0)
		{
			$flag=false;
			break;
		}	
	}

	if($flag)
	{
		echo $i." ";
	}

}
?>	