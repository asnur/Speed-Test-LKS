<?php
session_start();

//Generate Text Randomly
function text($length = 4)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function image()
{
    $text = text();
    $_SESSION['captcha'] = $text;
    $image = imagecreate(100, 30);
    $background = imagecolorallocate($image, 255, 255, 255);
    $textcolor = imagecolorallocate($image, 0, 0, 0);
    $font = 'SIXTY.TTF';
    $rotate = rand(-15, 15);
    for ($i = 0; $i <= 3; $i++) {
        $x1 = mt_rand(0, 100);
        $x2 = mt_rand(0, 100);
        $x3 = mt_rand(0, 100);
        imageline($image, $x1, $x2, $x3, $x3, $textcolor);
    }
    imagettftext($image, 20, $rotate, 10, 25, $textcolor, $font, $text);
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
}

echo image();
