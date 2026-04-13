<?php
if(isset($_POST['b1']))
{
	if(isset($_COOKIE['name']))
	{
		echo "name=".$_COOKIE['name'];
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
