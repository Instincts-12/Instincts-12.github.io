<?php
    header('Content-type: image/jpeg');
    $newwidth = $_GET['w'];
    $url=$_GET['url'];
    
    list($width,$height)=  getimagesize($url);
    $newheight=$newwidth*($height/$width);
    $image_p = imagecreatetruecolor($newwidth,$newheight);
    $image = imagecreatefromjpeg($url);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0,$newwidth,$newheight,$width,$height);
    echo imagejpeg($image_p,null,100);
?>

