<?php
    // Пример 7.17. Выполнение системной команды
    $cmd = "dir"; // Windows
    // $cmd = "ls"; // Linux, Unix & Mac
    exec(escapeshellcmd($cmd), $output, $status);

    if ($status) echo "Команда exec не выполнена";
    else 
    {
        echo "<pre>";
        foreach($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }
?>