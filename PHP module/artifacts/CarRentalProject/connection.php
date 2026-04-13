<?php

function Connect()
{
	$dbhost = "localhost:3333";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "car";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>