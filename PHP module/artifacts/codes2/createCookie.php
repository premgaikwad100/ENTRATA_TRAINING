<?php
if(isset($_POST['b1']))
{
	setcookie("name","bhagyesh",time()+3600);
}
?>
<html>
<body>
<form method="post">
	<input type="submit" name="b1"/>
</form>
</body>
</html>	