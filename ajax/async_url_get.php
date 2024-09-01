<!-- Пример 17.5. async_url_get.php -->
<?php 
    if (isset($_GET['url']))
    {
        echo file_get_contents("http://" . sanitizeString($_GET['url']));
    }
    function sanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }
?>