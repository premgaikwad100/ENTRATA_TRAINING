<?php

$no=101;
$i=2;
$flag=0;
if($no>1 && $no<100)
{
	for($i=2;$i<$no;$i++)
	{	
	if($no%$i==0)
	{
		$flag=1;//not
	}

	}
}
else{
	echo "no is greater than 100";
}
if($no>1 && $no<100)
{
if($flag==0)
{
	echo "no is prime";
}
else 
{
echo "no is not prime";
}	
}
?>	