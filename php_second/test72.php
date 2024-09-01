<?php
    // Пример 5.16. Использование в методе переменной $this
    class User
    {
        public $name, $password;

        function get_password()
        {
            return $this->password;
        }
    }
?>