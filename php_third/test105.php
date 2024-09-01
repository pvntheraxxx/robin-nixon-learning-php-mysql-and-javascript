<?php
    // Пример 7.5. Чтение файла с помощью функции fgets
    $fh = fopen("testfile.txt",'r') or 
    die("Файл не существует, или вы не обладаете правами на его отерытие");

    $line = fgets($fh);
    fclose($fh);
    echo $line;
?>