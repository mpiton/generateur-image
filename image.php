<?php



header ("Content-type: image/gif");
$idimg=imagecreate(800,600);
$blanc=imagecolorallocate($idimg,255,255,255);
$noir=imagecolorallocate($idimg,0,0,0);
$tab=array (200,150,600,150,700,450,100,450);
imagefilledpolygon($idimg,$tab,4,$noir);


$texte= $_POST['texte'];

imagestring($idimg,5,360,296,$texte,$blanc);
imagegif($idimg,"/tmp/trapeze.gif");
imagegif($idimg);
imagedestroy($idimg);

?>