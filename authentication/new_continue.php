<!-- Пример 12.6. Извлечение переменных сессии -->
<?php
    session_start();

    if (isset($_SESSION['forename']))
    {
        $forname = htmlspecialchars($_SESSION['forename']);
        $surname = htmlspecialchars($_SESSION['surname']);

        echo "Welcome back $forname.<br>
            Your full name is $forname $surname.<br>";
    }
    else echo "Please <a href='new_authenticate2.php'>Click here</a> to log in.";
?>