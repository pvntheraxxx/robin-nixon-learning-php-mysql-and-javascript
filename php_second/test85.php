<?php
    // Пример 6.3. Добавление элементов в массив и извлечение их из массива
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";

    for ($j = 0; $j < 4; ++$j)
    echo "$j: $paper[$j]<br>";
?>