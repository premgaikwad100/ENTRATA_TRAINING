<?php
	if(isset($_POST['b1']))
	{
		
		foreach($_POST['c1'] as $selected)
		{
			echo "<br>".$selected;
		}
	}	
		
?>
<html>
<body>
<form method="post">
	<input type="checkbox" name="c1[]"value="java"/>java<br>
	<input type="checkbox" name="c1[]"value="c++"/>c++<br>
	<input type="checkbox" name="c1[]"value="php"/>php<br>
	<input type="submit" name="b1"/>
</form>
</body>
</html>