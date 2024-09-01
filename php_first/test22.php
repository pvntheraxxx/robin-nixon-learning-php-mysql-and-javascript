<?php 
    // Пример 3.15. Решить проблему можно путём переноса ссылки на переменную $temp в её локальную область видимости
    $temp = "Дата: ";
    echo $temp . longdate(time());
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }
?>