<!-- Пример 17.3. async_url_post.php -->
<?php
    if (isset($_POST['url'])) {
        echo file_get_contents("http://" . SanitizeString($_POST['url']));
    }
    function SanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }
?>