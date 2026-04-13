<?php
$con=mysqli_connect("localhost:3333","root","root","vehicle");
$sql2="select * from vb";
$retval=mysqli_query($con,$sql2);
while($row=mysqli_fetch_assoc($retval))
{
	echo "no".$row['no'];
	echo "value".$row['value'];
}
?>	