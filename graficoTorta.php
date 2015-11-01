<?PHP
   header("Content-type: image/png");
// Calcular ángulos
   $pos = $_GET['pos'];
   $neg = $_GET['neg'];
   $label1 = $_GET['lab1'];
   $label2 = $_GET['lab2'];
   $totalOpiniones = $pos + $neg;
 
   $porcentaje1 = round (($pos/$totalOpiniones)*100,2);
   $angulo1 = 3.6 * $porcentaje1;
   $porcentaje2 = round (($neg/$totalOpiniones)*100,2);
   $angulo2 = 3.6 * $porcentaje2;
 
// Crear imagen
   $imagen = imagecreate (300, 300);
   $colorfondo = imagecolorallocate ($imagen, 80, 100, 157); // CCCCCC
   $color1 = imagecolorallocate ($imagen, 17, 156, 13); // FF0000
   $color2 = imagecolorallocate ($imagen, 255, 0, 26); // 00FF00
   $colortexto = imagecolorallocate ($imagen, 0, 0, 0); // 000000
 
// Mostrar tarta
   imagefilledrectangle ($imagen, 0, 0, 300, 300, $colorfondo);
   imagefilledarc ($imagen, 150, 120, 200, 200, 0, $angulo1, $color1, IMG_ARC_PIE);
   imagefilledarc ($imagen, 150, 120, 200, 200, $angulo1, 360, $color2, IMG_ARC_PIE);
   
// Mostrar leyenda
   imagefilledrectangle ($imagen, 20, 252, 40, 262, $color1);
   $texto1 = $label1.": " . $pos . " (" . $porcentaje1 . "%)";
   imagestring ($imagen, 5, 50, 250, $texto1, $colortexto);
   imagefilledrectangle ($imagen, 20, 272, 40, 282, $color2);
   $texto2 = $label2.": " . $neg . " (" . $porcentaje2 . "%)";
   imagestring ($imagen, 5, 50, 270, $texto2, $colortexto); 
 
   imagepng ($imagen);
   imagedestroy ($imagen);
?>