<?php
session_start();
//Cream imaginea
$im=imagecreatetruecolor(70, 20);
//Culoarea de fundal a imaginii
 $background = imagecolorallocate($im, 200, 0, 0);
 imagefill($im, 0, 0, $background);
 $linecolor = imagecolorallocate($im, 100, 100, 100);

 // desenare de linii random on canvas
  for($i=0; $i < 6; $i++) {
    imagesetthickness($im, rand(1,3));
    imageline($im, 0, rand(0,30), 120, rand(0,30) , $linecolor);
  }




//Culoarea la string
$text_color=imagecolorallocate($im, 255, 255, 255);
//O valoare aleatorie pe care trebuie sa o introduca userul
$rand=rand(10000, 50000);
imagestring($im, 5, 2, 2, $rand, $text_color);
//Specificam browser-ului ca este vorba de o imagine
header('Content-type:image/jpeg');
//Cream imaginea ca jpeg pentru a o vizualiza
imagejpeg($im);

//Cream o sesiune ce memoreaza valoarea din $rand
$_SESSION['check']=$rand;
?>