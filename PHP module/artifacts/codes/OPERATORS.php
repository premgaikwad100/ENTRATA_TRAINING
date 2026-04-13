<?php

$a = 10;
$b = 3;
$str1 = "Hello";
$str2 = " PHP";
$x = null;

// Arithmetic Operators
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Power: " . ($a ** $b) . "<br><br>";

// Assignment Operators
$c = $a;
$c += $b;
echo "After += : $c <br>";
$c -= $b;
echo "After -= : $c <br><br>";

// Comparison Operators
echo "Equal: ";
var_dump($a == $b);
echo "<br>";

echo "Greater: ";
var_dump($a > $b);
echo "<br><br>";

// Logical Operators
echo "Logical AND: ";
var_dump($a > 5 && $b < 5);
echo "<br><br>";

// Increment / Decrement
echo "Pre Increment: " . (++$a) . "<br>";
echo "Post Decrement: " . ($b--) . "<br>";
echo "New b value: $b <br><br>";

// String Operators
echo "Concatenation: " . ($str1 . $str2) . "<br><br>";

// Ternary Operator
$result = ($a > $b) ? "a is greater" : "b is greater";
echo "Ternary: $result <br><br>";

// Null Coalescing
echo "Null Coalescing: " . ($x ?? "Default Value") . "<br><br>";

// Bitwise Operators
echo "Bitwise AND: " . ($a & $b) . "<br>";
echo "Bitwise OR: " . ($a | $b) . "<br>";
echo "Bitwise XOR: " . ($a ^ $b) . "<br>";

?>