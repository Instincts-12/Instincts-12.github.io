<?php
    header('Content-type: image/jpeg');
    if(!isset($_GET['w'])){
        $newheight = 100;
        $newwidth = 150;
    }
    else{
        $newwidth = $_GET['w'];
        $newheight=$newwidth*0.66666666667;
    }
    $url=$_GET['url'];
    $image_p = imagecreatetruecolor($newwidth,$newheight);
    $image = imagecreatefromjpeg('images/'.$url);
    list($width,$height)=  getimagesize('images/'.$url);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0,$newwidth,$newheight,$width,$height);
    echo imagejpeg($image_p,'small/'.$url,100);
//    echo imagejpeg($image_p,null,100);
?>

