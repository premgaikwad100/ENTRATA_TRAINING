<?php
if(!empty($_POST['mailing-submit']))
{
echo "<h4>Form 1 is calling</h4>";
}
if(!empty($_POST['contact-submit']))
{
echo "<h4>Form 2 is calling</h4>";
}
?>
<html>
<body>
<form name="mailinglist" method="post">
<fieldset>
<legend>Form 1</legend>
<h4>Email:<input type="text" name="email"></h4>
<input type="submit" name="mailing-submit"
value="Add our mailing list">
</fieldset>
</form>
<form name="contacts" method="post">
<fieldset>
<legend>Form 2</legend>
<h4>Email:<input type="text" name="email"></h4>
<h4>Subject:<input type="text"
name="subject"></h4>
<h4>Body of Email:<textarea
name="msg"></textarea></h4>
<input type="submit" name="contact-submit"
value="Send Email">
</fieldset>
</form>
</body>
</html>