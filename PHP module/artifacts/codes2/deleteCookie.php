<?php
if(isset($_POST['b1']))
{
	if(isset($_COOKIE['name']))
	{
		$name=$_COOKIE['name'];
		setcookie('name',$nm,time()-2000);
	}	
}
?>
<html>
<body>
<form method="post">
	<input type="submit" name="b1"/>
</form>
</body>
</html>	
