<!-- Пример 10.10. Добавление данных к таблице cats -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal error");

    $query = "
    INSERT INTO cats VALUES(NULL,'Cheetah','Charly',4);
    ";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");
?>