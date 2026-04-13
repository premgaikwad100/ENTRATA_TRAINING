<?php
class abc
{
	var $rollno;
	var $name;
	var $marks;
	function getinfo()
	{
		$this->rollno=20;
		$this->name='prem';
		$this->marks=20;
	}
	function dispinfo()
	{
		echo "rollno".$this->rollno;
		echo "name".$this->name;
		echo "marks".$this->marks;
	
	}
}
$c=new abc();
$c->getinfo();
$c->dispinfo();
?>