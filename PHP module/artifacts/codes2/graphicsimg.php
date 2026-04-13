<?php
$img=imagecreate(500,500);
$bgcolor=imagecolorallocate($img,150,200,230);
$fontcolor=imagecolorallocate($img,100,150,175);

imagettftext($img,20,0,5,5,$fontcolor,'arial.ttf',"VJTechAcademy");
header("Content-Type:image/png");
imagepng($img);
imagedestroy($img);
?> 