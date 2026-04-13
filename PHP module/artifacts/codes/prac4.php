<?php
$a=array("anita"=>"41","sunil"=>"31","samar"=>"59","ramesh"=>"40");
asort($a);
echo "array after value sort:";
print_r($a);
ksort($a);
echo "<br>array after key sort:";
print_r($a);
arsort($a);
echo "<br>array after reverse value sort:";
print_r($a);
krsort($a);
echo "<br>array after reverse key sort:";
print_r($a);
?>
