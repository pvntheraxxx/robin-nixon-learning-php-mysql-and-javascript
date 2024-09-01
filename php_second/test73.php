<?php
    // Пример 5.17. Неявное объявление свойства
    $object1 = new User();
    $object1->name = "Alice";
    
    echo $object1->name;
    class User {};
?>