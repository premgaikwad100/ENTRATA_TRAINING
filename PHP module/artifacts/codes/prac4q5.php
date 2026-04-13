<?php
	$arr=array("a"=>90,"b"=>20,"c"=>50);
	krsort($arr);
	$x=key($arr);
	
	echo "Largest key of array is:",$x;
?>	