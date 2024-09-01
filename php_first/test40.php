<?php
    // Пример 4.22. Многостраничная инструкция if ... elseif
    if ($page == "Home") echo "Вы выбрали Home";
    elseif ($page == "About") echo "Вы выбрали About";
    elseif ($page == "Login") echo "Вы выбрали News";
    elseif ($page == "Links") echo "Вы выбрали Links";
    else
    echo "Нераспознанный выбор";
?>