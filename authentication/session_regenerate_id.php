<!-- Пример 12.10. Регенерация сессии -->
<?php
    session_start();

    if (!isset($_SESSION['initiated']))
    {
        session_regenerate_id();
        $_SESSION['initiated'];
    }

    if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
    else ++$_SESSION['count'];

    echo $_SESSION['count'];
?>