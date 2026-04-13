<?php
$sum=0;
$temp=array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
for($i=0;$i<sizeOf($temp);$i++)
{
	$sum=$sum+$temp[$i];
}
$size=sizeOf($temp);
echo "Average = ".$sum/$size;
echo "<br><hr>";
sort($temp);
for($i=0;$i<5;$i++)
{
	echo "$temp[$i]  ";
}
echo "<br><hr>";
rsort($temp);
for($i=4;$i>=0;$i--)
{
	echo "$temp[$i] ";
}
?>
	