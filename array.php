<?php
    $answer = 0;
    $array = array();
    //Заполняем и выводим массив
    for ($i = 0; $i < 100; $i++)
    {
        $array[$i] = rand(-10, 10);
        echo $array[$i], " ";
    }
    //Проверяем массив
    for ($i = 0; $i < 99; $i++)
    {
        if ($array[$i] == $array[$i + 1])
            $answer++;
    }
    echo "<br>answer = ", $answer;
?>