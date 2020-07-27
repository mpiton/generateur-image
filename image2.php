<?php 

$image=imagecreate(50,50);
$couleur1 = imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
$couleur2=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));


for($x=0; $x <3; $x++){
   for($y=0; $y < 5; $y++){
       $pixel = rand(0,1);  
       $pixelColor = $couleur1;         
       if($pixel == 1){
           $pixelColor = $couleur2; 
   }            
imagefilledrectangle($image, $x * 10, $y * 10, ($x + 1) * 10, ($y + 1) * 10, $pixelColor);
imagefilledrectangle($image,40 - $x * 10, $y * 10, 50 - $x * 10, ($y + 1) * 10, $pixelColor);
}
}
header('Content-type: image/png');
imagepng($image);

?>