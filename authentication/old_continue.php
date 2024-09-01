<!-- Пример 12.6. Извлечение переменных сессии -->
<?php
    session_start();

    if (isset($_SESSION['forename']))
    {
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];

        echo "С возвращением, $forename.<br>
        Ваше полное имя $forename $surname.<br>
        ";
    } else echo "Пожалуйста, для входа <a href='old_authenticate2.php'>щёлкните
    здесь</a>.";
?>