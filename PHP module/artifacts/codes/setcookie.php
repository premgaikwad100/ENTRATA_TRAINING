<?php
$username=$_POST['username'];
$password=$_POST['password'];

setcookie("username","",$username);
setcookie("password","",$password,time()+9000);
echo "cookie is set";

?>

