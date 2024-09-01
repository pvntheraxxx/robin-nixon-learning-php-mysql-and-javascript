<!-- Пример 10.8. Описание таблицы cats -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal Error");

    $query = "DESCRIBE cats";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");

    $row = $result->num_rows;
    echo "<table><tr> <th>Column</th> <th>Type</th><th>Null</th> <th>Key</th> </tr>";

    for ($j = 0;$j < $row; ++$j)
    {
        $row = $result->fetch_array(MYSQLI_NUM);

        echo "<tr>";
        for($k = 0; $k < 4; ++$k)
        echo "<td>" . htmlspecialchars($row[$k]) . "</tb>"; 
        echo "</tr>";
    }
    echo "</table>";
?>