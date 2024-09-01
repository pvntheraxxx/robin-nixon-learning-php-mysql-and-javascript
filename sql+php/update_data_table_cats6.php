<!-- Пример 10.12. Переименование гепарда Charly в Charlie -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal Error");

    $query = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");
?>