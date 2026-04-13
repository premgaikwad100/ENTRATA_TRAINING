<?php
$con=mysqli_connect("localhost:3333","root","root","vehicle");
$sql="CREATE TABLE vb(no int(10),value int(10))";
$res=mysqli_query($con,$sql);
if($res)
{
	echo "yes is valid";
}
$sql2="select * from vb";
$retval=mysqli_query($con,$sql2);
while($row=mysqli_fetch_assoc($retval))
{
	echo "no".$row['no'];
	echo "value".$row['value'];
}
?>	