<?php
    // Пример 7.9. Перемещение файла
    if (!rename('testfile2.txt','testfile.new'))
        echo "Переименование невозможно";
    else
        echo "Файл успешно переименован в 'testfile2.new'";
?>