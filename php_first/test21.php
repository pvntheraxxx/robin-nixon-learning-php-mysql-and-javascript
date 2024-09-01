<?php 
    // Пример 3.14. Неудачная попытка получить доступ к переменной $temp
    $temp = "Дата: ";
    echo longdate(time());
    function longdate($timestamp)
    {
        return $temp . date("l F jS Y", $timestamp); 
        // Это свойство функции, ошибка возникает из-за того, что переменная $temp находится вне области видимости функции
        // Проще говоря, $temp вне зоны досигаемости для функции longdate, поэтому ошибка
    }
?>