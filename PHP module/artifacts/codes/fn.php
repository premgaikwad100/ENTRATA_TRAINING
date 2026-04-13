<?php

 class a
{
	 
	public function getname()
	{
		 $this->name="prem";
	}
}
 class b extends a
{
	public function dispname()
	{
		echo "my name is".$this->name;
	}
}
$obj1=new b();
$obj1->getname();
$obj1->dispname();
?>
	