<?php
    // Пример 4.20. Конструкция if ... else, в которой используются фигурные скобки
    if ($bank_balance < 100) 
    {
        $money = 1000;
        $bank_balance += $money;
    }
    else 
    {
        $savings += 50;
        $bank_balance -= 50;
    }
?>