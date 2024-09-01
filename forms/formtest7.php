<!-- Пример 11.9. Функции sanitizeString и sanitizeMySQL -->
<?php
    function sanitizeString($var)
    {
        if (get_magic_quotes())
            $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
    }

?>