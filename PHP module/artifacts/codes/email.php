<?php
	$to="premgaikwad1269@gmail.com";
	$subject="HELLLO";
	$message="test msg";
	$header="From:bhagyeshgaikwad2003@gmail.com";
	if(mail($to,$subject,$message,$header))
	{
		echo "Email send successfully";
	}
	else
	{
		echo "Failed";
	}
?>	