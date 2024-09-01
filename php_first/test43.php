<?php 
    // Пример 4.25. Альтернативный синтаксис инструкции switch
    switch ($page):
        case "Home":
            echo "Вы выбрали Home";
            break;
        // и т.д.
        case "Links":
             echo "Вы выбрали Links";
             break;
    endswitch;
?>