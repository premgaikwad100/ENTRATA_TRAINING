<?php



if(isset($_POST['btn']))
	
{
	$fn= $_POST['fname'];
	$ln= $_POST['lname'];
	$mn= $_POST['mno'];
	$em= $_POST['email'];
	$add= $_POST['address'];
	
	   if (empty($fn) || empty($ln) || empty($em) || empty($mn) || empty($add)) {
       echo "Fill data in fields";
		}
		$var1=preg_match("/[a-z A-Z]/",$fn);
		if(!$var1)
		{
			echo "<br>enter only letters";
		}
		$var2=preg_match("/[0-9]/",$_POST['mno']);
		if(!$var2)
		{
			echo "<br>enter only digits";
		}
		$var3=preg_match("/[0-9 a-z]*@gmail.com/",$_POST['email']);
		if(!$var3)
		{
			echo "<br>entered mail is wrong";
		}
}
?>
<html>
<body>
	<form name="f1" method="post" action="">
	<table border="1px solid black">

	<tr>
	<td>First Name</td>
	<td><input type="text" name="fname"></td>
	</tr>

	
	<tr>
	<td>Last Name</td>
	<td><input type="text" name="lname"></td>
	</tr>
	
	<tr>
	<td>Mobile no</td>
	<td><input type="text" maxlength="10" name="mno"></td>
	</tr>
	
	<tr>
	<td>Email</td>
	<td><input type="text" placeholder="@gmail.com" name="email" ></td>
	<tr>
	
	<tr>
	<td>Gender</td>
	<td>Male<input type="radio" name="r1">
	Female<input type="radio" name="r1"></td>
	</tr>
	
	<tr>
	<td>Select Year:</td>
	<td><select>
		<option>FY</option>
		<option>SY</option>
		<option>TY</option>
		</select></td>
	</tr>
	<tr>
	<td>
		address
	</td>
	<td>
		<textarea rows="10" cols="10" name="address">
		</textarea>
	</tr>	
	<tr>
		<td><input type="submit" name="btn"></td>
	</tr>	
	
	</table>
	</form>
</body>
</html>	
		