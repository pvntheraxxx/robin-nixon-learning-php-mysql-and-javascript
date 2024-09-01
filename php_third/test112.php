<?php
    // Пример 7.12. Обновление файла с использованием блокировки
    $fh = fopen("testfile.txt",'r+') or die("Сбой открытия файла");
    $text = fgets($fh);

    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "$text") or die("Сбой записи в файл");
        flock($fh, LOCK_UN);
    }
    fclose($fh);
    echo "Файл 'testfile.txt' успешно обновлён"
?>