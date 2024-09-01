<?php
    // Пример 7.10. Удаление файла
    if (!unlink('testfile.new')) echo "Удаление невозможно";
    else echo "Файл 'testfile2.new' удалён успешно";
?>