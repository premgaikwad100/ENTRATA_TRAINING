<?php
$server="localhost:3333";
$username="root";
$password="root";
$database="players";
$con=mysqli_connect($server,$username,$password,$database);
$sql="insert into info values('bhagyesh',18,'india')";
$sql1="insert into info values('virat',18,'india')";
if(mysqli_query($con,$sql))
{
	echo "data insetted successfuly";
}
if(mysqli_query($con,$sql1))
{
	echo "data insetted successfuly";
}
?>	