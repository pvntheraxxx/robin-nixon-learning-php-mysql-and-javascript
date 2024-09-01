<?php
    // Пример 6.14. Использование функции compact
    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifrey";
    $system = "Gridlock";
    $constellation = "Kasterborous";

    $contact = compact('fname','sname','planet','system','constellation');
    print_r($contact);
?>