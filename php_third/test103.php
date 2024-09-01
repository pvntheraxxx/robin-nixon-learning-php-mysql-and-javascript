<?php 
    // Пример 7.4. Создание простого текстового файла
    $fh = fopen("testfile.txt",'w') or die("Создать файл не удалось");

    $text = <<<_END
    Строка 1
    Строка 2 
    Строка 3
    _END;

    fwrite($fh,$text) or die("Сбой записи файла");
    fclose($fh);
    echo "Файл 'textfile.txt' записан успешно";
?>