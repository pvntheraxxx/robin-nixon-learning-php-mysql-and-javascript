<?php
    // Пример 5.13. Клонирование объекта
    $object1 = new User();
    $object1->name = "Alice";
    $object2 = clone $object1;
    $object2->name = "Amy";

    // В этом примере мы использовали функцию clone для создания клона экземпляра класса
    // 1. Сначала мы создали клон; 2. Потом мы поменяли у клона значение свойства name 

    echo "object1 name = " . $object1->name . "<br>";
    echo "object2 name = " . $object2->name;
    
    class User
    {
        public $name;
    }
?>