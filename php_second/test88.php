<?php
    // Пример 6.6. Последовательный перебор элементов числового массива с использованием цикла foreach...as
    $paper = array("Copier","Inkjet","Laser","Photo");
    $j = 0;

    foreach($paper as $item)
    {
        echo "$j: $item<br>";
        ++$j;
    }
?>