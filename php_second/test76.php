<?php
    // Пример 5.20. Изменение области видимости свойства и метода
    class Example 
    {
        var $name = "Michael"; // Нерекомендуемая форма, аналогичная public
        public $age = 23; // Открытое свойство
        protected $usercount; // Защищённое свойство

        private function admin() // Закрытый метод
        {
            // Сюда помещается код метода admin
        }
    }
?>