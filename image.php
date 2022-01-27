<?php 
session_start(); 
header('Content-Type: image/png'); 
$num = "0123456789"; 
$one = rand(0, 9); 
$two = rand(0, 9); 
$three = rand(0, 9); 
$four = rand(0, 9); 
$five = rand(0, 9); 
$six = rand(0, 9); 
$seven = rand(0, 9); 
#$one = 1; 
#$two = 9; 
#$three = 5; 
#$four = 2; 
#$five = 3; 
#$six = 5; 

$number = $num{$one}.$num{$two}.$num{$three}.$num{$four}.$num{$five}.$num{$six}.$num{$seven}; 
#phpinfo();
$img_handle = ImageCreate(120, 25) or die ("Cannot Create image"); 
$back_color = ImageColorAllocate($img_handle, 255, 255, 255); 
$txt_color = ImageColorAllocate($img_handle, 0, 0, 0); 
//$line_color = ImageColorAllocate($img_handle, 255, 0, 0);  //line //update 2-8-08 9am -cb
$font = imageloadfont("font/sketchey.gdf");  //http://www.devtrolls.com/gdf_fonts/fonts.html?p7

ImageString($img_handle, $font, 0, 0, substr($number,0,6), $txt_color); 
//ImageLine($img_handle,0,10,60,10, $line_color); //line  //update 2-8-08 9am -cb
Imagepng($img_handle); 

$_SESSION['img_number'] = $number; 



//---------------------------------------------------------------------------------------------------------------------------------------------

// File: CaptchaSecurityImages.php
// Author: Simon Jarvis
// Copyright: 2006 Simon Jarvis
// Date: 03/08/06
// Updated: 07/02/07
// Requirements: PHP 4/5 with GD and FreeType libraries
// Link: http://www.white-hat-web-design.co.uk/articles/php-captcha.php
// 
// This program is free software; you can redistribute it and/or 
// modify it under the terms of the GNU General Public License 
// as published by the Free Software Foundation; either version 2 
// of the License, or (at your option) any later version.
// 
// This program is distributed in the hope that it will be useful, 
// but WITHOUT ANY WARRANTY; without even the implied warranty of 
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
// GNU General Public License for more details: 
// http://www.gnu.org/licenses/gpl.html
//

 
class CaptchaSecurityImages {
 
   var $font = 'monofont.ttf';
 
   function generateCode($characters) {
      // list all possible characters, similar looking characters and vowels have been removed 
      $possible = '23456789bcdfghjkmnpqrstvwxyz';
      $code = '';
      $i = 0;
      while ($i < $characters) { 
         $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
         $i++;
      }
      return $code;
   }
 
   function CaptchaSecurityImages($width='120',$height='40',$characters='6') {
      $code = $this->generateCode($characters);
      // font size will be 75% of the image height 
      $font_size = $height * 0.75;
      $image = imagecreate($width, $height) or die('Cannot initialize new GD image stream');
      // set the colours 
      $background_color = imagecolorallocate($image, 255, 255, 255);
      $text_color = imagecolorallocate($image, 20, 40, 100);
      $noise_color = imagecolorallocate($image, 100, 120, 180);
      // generate random dots in background 
      for( $i=0; $i<($width*$height)/3; $i++ ) {
         imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
      }
      // generate random lines in background 
      for( $i=0; $i<($width*$height)/150; $i++ ) {
         imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
      }
      // create textbox and add text 
      $textbox = imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
      $x = ($width - $textbox[4])/2;
      $y = ($height - $textbox[5])/2;
      imagettftext($image, $font_size, 0, $x, $y, $text_color, $this->font , $code) or die('Error in imagettftext function');
      // output captcha image to browser 
      header('Content-Type: image/jpeg');
      imagejpeg($image);
      imagedestroy($image);
      $_SESSION['security_code'] = $code;
   }
 
}
 
$width = isset($_GET['width']) && $_GET['height'] < 600 ? $_GET['width'] : '120';
$height = isset($_GET['height']) && $_GET['height'] < 200 ? $_GET['height'] : '40';
$characters = isset($_GET['characters']) && $_GET['characters'] > 2 ? $_GET['characters'] : '6';
 
$captcha = new CaptchaSecurityImages($width,$height,$characters);
//$Imagepng = new CaptchaSecurityImages($width,$height,$characters);
$_SESSION['img_number'] = $code; 
return $code;

?> 
