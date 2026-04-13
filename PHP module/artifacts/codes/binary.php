<?php
	$num=15;
	$binary;
	$temp=$num;
	for($i=0;$num>0;$i++)
	{
		$binary[$i]=$num%2;
		$num=(int)($num/2);
	}
	echo "decimal number is :",$temp,"<br>";
	echo "Equivalent Binary Number is:";
	for($i=$num;$i>=0;$i++)
	{
		echo $binary[$i];
	}
?>	


//half
//half
//half
//half
//half
//half
//half