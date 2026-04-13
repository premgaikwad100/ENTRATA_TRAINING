<?php
$img=imagecreate(500,500); 
$bgcolor=imagecolorallocate($img,150,200,230);
$fontcolor=imagecolorallocate($img,100,150,175);
imagestring($img,2,50,50,"VJTech Academy",$fontcolor);
header("Content-Type:image/png");
imagepng($img);
imagedestroy($img);
?>