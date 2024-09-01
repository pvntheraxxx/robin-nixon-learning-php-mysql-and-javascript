<?php
    // Пример 6.8. Последовательный перебор элементов ассоциативного массива с помощью функций each и list
    $paper = array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    );
    while (list($item,$description) = each($paper))
        echo "$item: $description<br>";
?>