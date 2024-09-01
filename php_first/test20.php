<?php 
    // Пример 3.13. Расширенная версия функции longdate
    function longdate($timestamp)
    {
        $temp = date("l F jS Y", $timestamp);
        return "Дата: $temp";
    }
    echo longdate(time()); // Просто выводим текущую дату
?>