<?php
$add=create_function('$a,$b','return $a+$b;');
$sum=$add(10,20);
echo $sum;
?>