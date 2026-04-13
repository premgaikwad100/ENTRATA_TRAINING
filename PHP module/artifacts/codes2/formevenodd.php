
<?php
	if(isset($_POST['b1']))
	{
		$no=$_POST['t1'];
		if($no%2==0)
		{
			echo "no is even";
		}
		else{
			echo "no is odd";
			}
	}
?>	
<html>
<body>
<form method="post" action="">
	ENter no=<input type="text" name="t1"/><br>
	<input type="submit" name="b1" value="check"/>
</form>
</body>
</html>	