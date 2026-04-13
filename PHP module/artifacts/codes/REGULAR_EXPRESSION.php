<?php

$text = "My email is prem123@gmail.com and contact number is 9876543210";

// 1. preg_match() -> check first match
if (preg_match("/gmail\.com/", $text)) {
    echo "Email domain found <br>";
}

// 2. preg_match_all() -> find all digits
preg_match_all("/\d/", $text, $matches);
echo "All digits: ";
print_r($matches[0]);
echo "<br><br>";

// 3. preg_replace() -> replace numbers
$newText = preg_replace("/\d+/", "XXXX", $text);
echo "After replace: " . $newText . "<br><br>";

// 4. preg_split() -> split string by spaces
$words = preg_split("/\s+/", $text);
echo "Split words: ";
print_r($words);
echo "<br><br>";

// 5. preg_grep() -> filter array using regex
$names = array("Prem", "Java123", "PHP", "123");
$result = preg_grep("/^[A-Za-z]+$/", $names);

echo "Only alphabets: ";
print_r($result);
echo "<br><br>";

// Common regex patterns
echo "Regex patterns examples <br>";
echo "/[A-Z]/ -> uppercase letters <br>";
echo "/[a-z]/ -> lowercase letters <br>";
echo "/[0-9]/ -> digits <br>";
echo "/^P/ -> starts with P <br>";
echo "/m$/ -> ends with m <br>";
echo "/.+/ -> one or more characters <br>";

?>