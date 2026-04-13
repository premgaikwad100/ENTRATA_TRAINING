<?php
	if(isset($_POST['b1']))
	{
		$nm=$_POST['tf1'];
		$vl=$_POST['tf2'];
		setcookie($nm,$vl,Time()+3600);
		if(isset($_COOKIE[$nm]))
		{
			echo "yes";
		}	
	}	
?>
<html>
<body>
<form method="post">
	name=<input type="text" name="tf1"/><br>
	value=<input type="text" name="tf2"/><br>
	<input type="submit" name="b1">
</form>
</body>
</html>	