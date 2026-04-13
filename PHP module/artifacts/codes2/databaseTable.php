<?php
$server="localhost:3333";
$username="root";
$password="root";
$database="players";
$con=mysqli_connect($server,$username,$password,$database);
$sql="create table info(name varchar(20),no int(10),country varchar(20))";
mysqli_query($con,$sql);
?>