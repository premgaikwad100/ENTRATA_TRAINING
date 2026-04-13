<?php
if(isset($_POST['b1']))
{
	session_start();
	$_SESSION['favcolor']='green';
	$_SESSION['favanimal']='dog';
	echo "favcolor".$_SESSION['favcolor'];
	echo "favanimal".$_SESSION['favanimal'];
}
?>
<html>
<body>
<form method="post">
	<input type="submit" name="b1"/>
</form>
</body>
</html>	
