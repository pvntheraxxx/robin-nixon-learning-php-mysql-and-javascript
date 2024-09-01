<!-- Пример 12.9. Сессия, воспринимаемая к фиксации сессии -->
<?php
    session_start();

    if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
    else ++$_SESSION['count'];
    
    echo $_SESSION['count'];
?>