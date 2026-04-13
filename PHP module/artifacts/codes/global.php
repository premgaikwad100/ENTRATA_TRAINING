<?php
$x = 100; //Global Variable $x
function vjtech() //Function Defination
{
global $x;
$y = 200;//Local Variable $y
echo "<br>Local Variable y Value=$y";
echo "<br>Inside the function global Variable x
Value=$x";
$x = 700;
}
vjtech(); //Calling Function
echo "<br>Outside the function global Variable x Value=$x";
?>