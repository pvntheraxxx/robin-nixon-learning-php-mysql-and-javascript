<?php
    // Пример 5.9. Проверка существования функции
    if (function_exists("array_combine"))
    {
        echo "Функция существует";
    }
    else
    {
        echo "Функция не существует, желательно создать её самостоятельно";
    }
?>