<? 
header("Content-type: image/png"); 
$num = "0123456789"; 
$one = rand(0, 9); 
$two = rand(0, 9); 
$three = rand(0, 9); 
$four = rand(0, 9); 
$five = rand(0, 9); 
$six = rand(0, 9); 
$seven = rand(0, 9); 
//$number = $num{$one}.$num{$two}.$num{$three}.$num{$four}.$num{$five}.$num{$six}; 
$number = $num{$one}.$num{$two}.$num{$three}.$num{$four}.$num{$five}.$num{$six}.$num{$seven}; 

$img_handle = ImageCreate (60, 20) or die ("Cannot Create image"); 
$back_color = ImageColorAllocate($img_handle, 255, 255, 255); 
$txt_color = ImageColorAllocate($img_handle, 0, 0, 0); 
//ImageString($img_handle, 31, 5, 5, $number, $txt_color); 
ImageString($img_handle, 31, 5, 5, substr($number,0,6), $txt_color); 
Imagepng($img_handle); 

session_start(); 
$_SESSION['img_number'] = $number; 

?> 