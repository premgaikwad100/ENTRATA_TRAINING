<?php 
$number = 0; 
$a = 0; 
$b = 1;  
echo $a.' '.$b.' '; 
while ($number < 10 ) 
{ 
$c = $b + $a; 
echo $c.' '; 
$a = $b; 
$b = $c; 
$number = $number + 1; 
}
?> 