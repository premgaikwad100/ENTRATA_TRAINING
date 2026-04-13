<?php
$server="localhost:3333";
$username="root";
$password="root";
$database="players";
$con=mysqli_connect($server,$username,$password,$database);
$sql="delete from info where name='virat'";
if(mysqli_query($con,$sql))
{
	echo "deleted";
}
?>	