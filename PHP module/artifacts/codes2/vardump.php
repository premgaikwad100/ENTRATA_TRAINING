<?php  
class demo  
{  
        private $a= "Atul";  
        public function display()  {  
        echo $this->a;  
        }  
}  
$obj = new demo();  
    $obj->display();  
    var_dump($obj);  
?> 