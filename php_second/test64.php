<?php
    // Пример 5.8. Однократное востребование файла PHP
    require_once "library.php";
    
    // Сюда помещается ваш код
    /* 

    include - это директива подключения библиотек функций.
    При каждом использовании директивы include она снова вставляет требуемый файл, даже если он уже вставлен.

    include_once - это директива однократного подключения файла библиотек функций

    require - это тоже добавление библиотеки, но функционально отличающееся. require постоянно требует файл

    require_once - делает востребования до тех пор пока не добавит библиотеку функций

    */
?>