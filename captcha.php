<?php
session_start();
$text = $_SESSION['captcha_code'];

$my_img = imagecreate( 
    200, 30 
); 
//width & height
$background  = imagecolorallocate( 
    $my_img, 255, 255, 255 
);
$text_colour = imagecolorallocate( 
    $my_img, 0, 0, 0 
);
imagestring( 
    $my_img, 40, 70, 10, $text, $text_colour 
);
imagesetthickness ( 
    $my_img, 5 
);

header( "Content-type: image/png" );

imagepng( 
    $my_img 
);
imagecolordeallocate( 
    $line_color 
);
imagecolordeallocate( 
    $text_color 
);
imagecolordeallocate( 
    $background 
);
imagedestroy( 
    $my_img 
);
