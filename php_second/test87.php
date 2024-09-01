<?php
    // Пример 6.5. Добавление элементов к массиву с использованием ключевого слова array
    $p1 = array("Copier", "Inkjet","Laser","Photo"); // Ещё один способ создания массива

    echo "Элемент массива p1: " . $p1[2] . "<br>";

    $p2 = array(
        "copier" => "Copier & Multipurpose",
        "inkjet" => "Inkjet Printer",
        "laser" => "Laser Printer",
        "photo" => "Photographic Paper"
    );

    echo "Элемент массива p2: " . $p2['inkjet'] . "<br>";
?>