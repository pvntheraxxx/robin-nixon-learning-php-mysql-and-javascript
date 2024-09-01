<!-- Пример 10.13. Удаление сведений о пуме Growler из таблицы cats -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal error");

    $query = "DELETE FROM cats WHERE name='Charlie'";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");
?>