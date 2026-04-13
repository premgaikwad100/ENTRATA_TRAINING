<?php
	$car=array("a"=>"Scorpio","b"=>"bolero","c"=>"Safari");
	$bikes=array("f"=>"Apache","e"=>"Splendor","d"=>"Bullet");
	$vehicles=array($car,$bikes);
	$temp=ksort($vehicles);
	print_r($temp);
?>	