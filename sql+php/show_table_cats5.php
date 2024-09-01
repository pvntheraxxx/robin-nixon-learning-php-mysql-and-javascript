<!-- Пример 10.11. Извлечение строк из таблицы cats -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal Error");

    $query = "SELECT * FROM cats";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");

    $rows = $result->num_rows;
    echo "<table><tr> <th>Id</th> <th>Family</th><th>Name</th><th>Age</th></tr>";

    for ($j = 0; $j < $rows; ++$j)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        echo "<tr>";
        for ($k = 0; $k < 4; ++$k)
            echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>