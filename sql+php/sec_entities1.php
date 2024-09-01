<!-- Пример 10.21. Способ безопасного доступа к MySQL и предотвращения XSS-атак -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal Error");

    $user = mysql_entities_fix_string($conn,$_POST['user']);
    $pass = mysql_entities_fix_string($conn,$_POST['pass']);
    $query = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";

    function mysql_entities_fix_string($conn,$string)
    {
        return htmlentities(addslashes($conn,$string));
    }
?>