<?php
$flag=0;
$no=3;
$i=2;
while($no<100)
{
	
	while($i!=$no)
	{
		if($no%$i==0)
		{
			$flag=1;
		}
		else
		{
			$flag=0;
		}
		$i++;
	}
	if($flag==1)
	{
		echo "$no";
	}	
}
	