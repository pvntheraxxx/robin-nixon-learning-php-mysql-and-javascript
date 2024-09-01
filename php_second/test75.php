<?php
    // Пример 5.19. Определение констант внутри класса
    Translate::lookup(); // Вызов метода lookup(), который находится внутри класса Translate

    class Translate 
    {
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        const GERMAN = 3;
        // ...
        static function lookup()
        {
            echo self::SPANISH;
        }
    }
?>