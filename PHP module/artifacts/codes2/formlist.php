<?php
	if(isset($_POST['b1']))
	{
		
		foreach($_POST['transport'] as $selected)
		{
			echo "<br>".$selected;
		}
	}	
		
?>
<html>
<body>
<form method="post">
	<select name="transport[]" multiple="multiple">
		<option>bus</option>
		<option>car</option>
		<option>bike</option>
	</select>
	<input type="submit" name="b1"/>
</form>
</body>
</html>