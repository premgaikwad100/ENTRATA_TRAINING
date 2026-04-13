<?php
if(isset($_POST['b1']))
{
	$name=$_POST['name'];
	$no=$_POST['no'];
	$email=$_POST['email'];
	$url=$_POST['url'];
	if(!empty($name)||!empty($no)||!empty($email)||!empty($url))
	{
		$res=(!preg_match("/^[a-z A-z]*$/",$name));
		if($res)
		{
			echo "enter only alphabhets";
		}
		$res1=(!preg_match("/^[0-9]*$/",$no));
		if($res1)
		{
			echo "enter only numbers";
		}
		$res2=(!preg_match("/[_a-z 0-9]]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^/",$email));
		if($res2)
		{
			echo "invalid email";
		}
		$res3=(!preg_match("/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/",$url));
		if($res3)
		{
			echo "invalid";
		}

	}
}	
?>
<html>
<body>
<form method="POST">
	Name:<input type="text" name="name"/><br>
	Number:<input type="text" name="no"/><br>
	Email:<input type="text" name="email"/><br>
	url:<input type="text" name="url"/><br>
	<input type="submit" name="b1"/>
</form>
</body>
</html>
	