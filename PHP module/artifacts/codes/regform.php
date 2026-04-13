<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$t1= $_POST['t1'];
	$t2= $_POST['t2'];
	$em= $_POST['em'];
	$b1= $_POST['b1'];
	
	$mb= $_POST['mb'];
	
	
}

if(isset($_POST['b1']))
{
if (empty($t1) || empty($t2) || empty($em) || empty($mb)) {
       echo "Fill data in fields";
}

}









?>
<html>
<HEAD>

</HEAD>
<body>
<form action=" " method="post" />
<table border="2px">

<tr>
<td>Enter First Name:</td>
<td><input type="text" name="t1"/></td>
</tr>

<tr>
<td>Enter Last Name:</td>
<td><input type="text" name="t2"/></td>
</tr>

<tr>
<td>Enter Email :</td>
<td><input type="email" placeholder="@gmail.com" name="em"/></td>
</tr>



<tr>
<td>Enter Mobile No:</td>
<td><input type="number" name="mb" maxlength="10" placeholder="Enter 10 digits"/></tr>
</tr>

<tr>
<td>Select State:</td>
<td>
<select id="state">
<option>Maharashtra</OPTION>
<option>Gujrat</OPTION>
<option>MP</OPTION>
<option>UP</OPTION>
<option>Goa</OPTION>
<option>Aasam</OPTION>
<option>Kerala</OPTION>

</SELECT>
</td>
</tr>

<tr>
<td>Select Diploma Year:</td>
<td>
<select id="yr">
<option>TY</OPTION>
<option>SY</OPTION>
<option>FY</OPTION>
</SELECT>
</td>
</tr>

<tr>
<td>Enter Address:</td>
<td><textarea name="txt" rows="20" cols="20">
</textarea></td>
</tr>
<hr>
<tr>
<td><center><input type="submit" name="b1" value="SUBMIT"/></center></td>
</tr>
</table>
   
	

</body>
</html>