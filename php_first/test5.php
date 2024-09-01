<?php 
    $ammonia = 0;
    $bleach = 0;
    $ingredient = $ammonia xor $bleach; //Если хотя бы одно из значени этих переменных равно true, то будет выведен 0 (False) 
    echo $ammonia, $bleach, $ingredient; //Будет выведено 000, то есть все значения ноль, таким образом работает оператор XOR
?>