<!-- Пример 17.6. xml_get.php -->
<?php
    if (isset($_GET['url']))
    {
        header('Content-Type: text/xml');
        echo file_get_contents("http://".sanitizeString($_GET['url']));
    }
    function sanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }
?>