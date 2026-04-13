<?php
$no=102;
$temp=$no;
$rev=0;
while($no>0)
{
	$rem=$no%10;
	$rev=($rev*10)+$rem;
	$no=(int)($no/10);
}
echo $rev;
?>	