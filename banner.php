<?php
// файл
$filename = 'test.png';

// задание максимальной ширины и высоты
$width = 2000;
$height = 2000;

// тип содержимого
header('Content-Type: image/png');

// получение новых размеров
list($width_orig, $height_orig) = getimagesize($filename);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
   $width = $height*$ratio_orig;
} else {
   $height = $width/$ratio_orig;
}

// ресэмплирование
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefrompng($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// вывод
imagepng(imagescale($image_p, 200, 100));
?>