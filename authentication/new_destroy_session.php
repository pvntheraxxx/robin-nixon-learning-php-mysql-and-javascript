<!-- Пример 12.7. Полезная функция уничтожения сессии и её данных -->
<?php
    function destroy_session_and_data()
    {
        session_start();
        $_SESSION = array();
        setcookie(session_name(),'',time() - 2592000,'/');
        session_destroy();
    }
?>