<?php
$str=$_SERVER['PHP_SELF'];
echo $str;
// $str1=$_SERVER['SERVER_ADDR'];
// echo $str1;
// $str2=$_SERVER['GATEWAY_INTERFACE'];
// echo $str2;
// $str3=$_SERVER['SERVER_NAME'];
 // echo $str3;

$files=$_FILES['file'];
print_r($files);
?>
<html>
<body>
<form method="post" action="">
select file
<input type="file" name="file" id="file"/>
<input type="submit" value="submit"/>
</form>
</body>
</html>
	