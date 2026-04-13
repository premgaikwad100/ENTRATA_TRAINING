<?php
//simple function
function disp()
{
	echo "welcome to function";
}

//with arg and with return value

function disp2($a)
{
	echo "<br> welcome to function2";
	return $a*$a;
}
//setting default value function
function print_msg($param=null)
{
	print$param;
}
disp();
$p=disp2(10);
echo "<br> $p";
print_msg("<br>this is test");
// print_msg();
?>	