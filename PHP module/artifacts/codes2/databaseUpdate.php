<?php
$server="localhost:3333";
$username="root";
$password="root";
$database="players";

$sql="update info set name='bubu' where no='18'";
$str=mysqli_connect($con,$sql)
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
	echo "name=".$row[0];
	echo "<br>no=".$row[1];
	echo "<br>country=".$row[2];
}
?>	