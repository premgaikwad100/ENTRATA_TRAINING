<?php
$server="localhost:3333";
$username="root";
$password="root";
$database="players";
$con=mysqli_connect($server,$username,$password,$database);
$sql="select * from info";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
	echo "<br>name=".$row['name'];
	echo " no=".$row['no'];
	echo " country=".$row['country'];
}
}
else{
	echo "no result";
}	
?>