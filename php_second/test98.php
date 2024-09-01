<?php
    // Пример 6.15. Использование функции compact для отладки программы
    $j = 23;
    $temp = "Hello";
    $address = "1 Old Street";
    $age = 61;

    print_r(compact (explode(' ','j temp address age')));
?>