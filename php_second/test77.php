<?php
    // Пример 5.12. Создание статического метода и обращение к нему
    User::pwd_string();

    class User 
    {
        static function pwd_string()
        {
            echo "Пожалуйста, введите ваш пароль";
        }
    }
?>