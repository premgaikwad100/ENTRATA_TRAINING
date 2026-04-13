<?php
$no=1234;
$rev=0;
while($no>1)
{
	$rem=$no%10;
	echo "$rem";
	//$rev=($rev*10)+$rem;
	$no=$no/10;
}
//echo "$rem";

?>