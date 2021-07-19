<?php
include('php-barcode.php');
header('Content-Type: image/jpeg');
$im     = imagecreatetruecolor(300, 300);
$black  = ImageColorAllocate($im,0x00,0x00,0x00);
$white  = ImageColorAllocate($im,0xff,0xff,0xff);
imagefilledrectangle($im, 0, 0, 300, 300, $white);
$data = Barcode::gd($im, $black, 50, 50, 0, "datamatrix", "salut", 5, 1);
imagejpeg($im);
?>
