<?php
    // Пример 7.8. Альтернативный синтаксис для копирования файла
    if (!copy('testfile.txt','testfile2.txt')) echo "Копирование невозможно";
    else echo "Файл успешно скопирован в 'testfile2.txt'";
?>