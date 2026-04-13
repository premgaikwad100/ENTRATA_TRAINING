<?php

class MagicDemo {
    private $data = [];

    // Called automatically when object is created
    public function __construct() {
        echo "Object created successfully<br>";
    }

    // Called when setting inaccessible/non-existing property
    public function __set($name, $value) {
        $this->data[$name] = $value;
        echo "Setting $name = $value<br>";
    }

    // Called when getting inaccessible/non-existing property
    public function __get($name) {
        echo "Getting $name : ";
        return $this->data[$name] ?? "Not Found";
    }

    // Called when undefined method is called
    public function __call($name, $arguments) {
        echo "Method '$name' does not exist.<br>";
    }

    // Called when object is printed
    public function __toString() {
        return "This is MagicDemo object";
    }

    // Called when var_dump() is used
    public function __debugInfo() {
        return [
            "Stored Data" => $this->data
        ];
    }
}

// Create object -> __construct()
$obj = new MagicDemo();

// __set()
$obj->name = "Prem";

// __get()
echo $obj->name . "<br>";

// __call()
$obj->hello();

// __toString()
echo $obj . "<br>";

// __debugInfo()
var_dump($obj);

?>