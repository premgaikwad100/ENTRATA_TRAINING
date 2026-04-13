<?php
$server="localhost:3333";
$username="root";
$password="root";
$con=mysqli_connect($server,$username,$password);
if($con)
{
	$sql="create database players";
	if(mysqli_query($con,$sql))
	{	
		echo "database created";
	}
}	
else
{
	echo "cant connnect";
}
?>	
	