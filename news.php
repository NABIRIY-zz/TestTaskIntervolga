<?php
$a = fopen("news.txt", 'r');
echo fgets($a);
fclose($a);

echo "<br><br><a href=./banner.php>Второе задание</a>";// Гиперссылка на 2 задание
echo "<br><br><a href=./array.php>Четвертое задание</a>";// Гиперссылка на 4 задание
?>