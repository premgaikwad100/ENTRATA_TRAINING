<?php
$a="orginal";
$b=array("a"=>"cat","b"=>"hello");
extract($b);

print_r($b[a]);

?>