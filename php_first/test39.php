<?php
    // Пример 4.21. Конструкция if ... elseif ... else, в которой используются фигурные скобки
    if ($bank_balance < 100)
    {
        $money = 1000;
        $bank_balance += $money;
    }
    elseif ($bank_balance > 200)
    {
        $savings += 100;
        $bank_balance -= 100;
    }
    else
    {
        $savings += 50;
        $bank_balance -= 50;
    }
?>