<?php 
trait a
{
	function fn()
	{
		echo "traitA";
	}
}
trait b
{
	function fn1()
	{
		echo "traitB";
	}
}
class abc
{
	use a,b;
	function fn2()
	{
		echo "class abc";
	}
}
$obj=new abc();
$obj->fn();	
$obj->fn1();	
$obj->fn2();
?>	