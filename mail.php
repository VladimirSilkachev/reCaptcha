<?php

$im = imagecreate(200, 100);
//$im = 'dick.png';

$bg = imagecolorallocate($im, 255, 255, 255);

$white = imagecolorallocate($im, 255, 255, 255);
$red   = imagecolorallocate($im, 255,   0,   0);
$green = imagecolorallocate($im,   0, 255,   0);
$blue  = imagecolorallocate($im,   0,   0, 255);

$lst = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890';
$str = str_shuffle ($lst);
$string = mb_substr ($str , 0, 5);
$font_file = 'a_AssuanTitulStrDs.ttf';

$x = 30;
$y = 45;
$r4 = 0;
$r5 = 0;

for ($a = 0; $a <= strlen($string); $a++) {
    $r1 = rand (0, 200);
    $r2 = rand (0, 200);
    $r3 = rand (0, 200);
    $black = imagecolorallocate($im, $r1, $r2, $r3);
    $r5 = rand (-8, 8);
    $gr = rand (-30, 30);
    //imagechar($im, 5, $x = $x + $r4, $y += $r5, $string[$a], $black);
    imagettftext($im, 25, $gr, $x += $r4, $y += $r5, $black, $font_file, $string[$a]);
    $r4 = rand (30, 35);
}

for ($b = 0; $b != 2; $b++ ) {
    $rnd_x = rand (50 , 60);
    $rnd_y = rand (50 , 60);
    $rnd_wh = rand (0 , 360);
    $rnd_end = rand (0 , 360);
    imagearc($im, $rnd_x, $rnd_y, $rnd_wh, $rnd_wh, $rnd_end, $rnd_end, $black);
}
//imagechar($im, 5, 50, 45, $string, $black);

header('Content-type: image/png');
imagepng($im);
//xui
?>
