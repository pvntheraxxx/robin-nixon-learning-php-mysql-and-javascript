<!-- Пример 10.14. Добавление данных к таблице cats и отчёт о вставленном ID -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal error");

    $query = "INSERT INTO cats VALUES(NULL,'Lynx','Stumpy',5)";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");
    echo "Значение вставленного ID равно " . $conn->insert_id;
?>