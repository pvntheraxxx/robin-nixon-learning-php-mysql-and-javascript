<!-- Пример 10.16. Способ обезвреживания данных, введённых пользователем, приемлемый для MySQL -->
<?php
    function mysql_fix_quotes_gpc($conn,$string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conn->real_escape_string($string);
    }
?>