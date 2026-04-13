<?php
class parent1
{
}

class abc extends parent1 
{
		public $a=100;
		public $b="prem";
		function fn()
		{
			echo "this is function 1";
		}
		function fn2()
		{
			echo "this is function 2";
		}
}
	  $obj = new abc();
	  $bool=class_exists(abc);
	  echo "Does class exist",$bool,"<br>";
	  $arr=get_declared_classes();
	  print_r($arr);
	  $arr1=get_class_methods(abc);	
	  print_r($arr1);
	  $arr2=get_class_vars(abc);
	  print_r($arr2);
	  $bool1=get_parent_class(abc);
	  echo "$bool1";
	  $temp=is_object($obj);
	  echo "$temp";
  
?>				