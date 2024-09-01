<!-- Пример 10.7. Создание таблицы-->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal Error");

    $query = "CREATE TABLE cats (
        id SMALLINT NOT NULL AUTO_INCREMENT,
        family VARCHAR(32) NOT NULL,
        name VARCHAR(32) NOT NULL,
        age TINYINT NOT NULL,
        PRIMARY KEY (id)
    )";

    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");
?>