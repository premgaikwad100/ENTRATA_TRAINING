<?php
	if(isset($_POST['b1']))
	{
		$username=$_POST['t1'];
		$password=$_POST['t2'];
		echo "welcome ".$username;
	}
?>
<html>
<body>
<form method="post" action="">
	name=<input type="text" name="t1"/><br>
	password=<input type="text" name="t2"/>
	<input type="submit" name="b1"/>
</form>
</body>
</html>	