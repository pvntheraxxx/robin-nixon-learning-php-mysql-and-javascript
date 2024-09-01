<?php
    // Пример 6.7. Последовательный перебор элементов ассоциативного массива с использованием цикла foreach...as
    $paper = array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    );
    
    foreach($paper as $item => $description)
        echo "$item: $description<br>";
?>