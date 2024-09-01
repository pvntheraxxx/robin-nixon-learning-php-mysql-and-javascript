<!-- Пример 10.15. Выполнение вторичного запроса -->
<?php
    // require_once 'login.php';
    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    if ($conn->connect_error) die("Fatal Error");

    $query = "SELECT * FROM customers";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");

    $rows = $result->num_rows;

    for ($j = 0;$j<$rows;++$j)
    {
        $row = $result->fetch_array(MYSQLI_NUM);
        echo htmlspecialchars($row[0]) . " purchased ISBN " . 
             htmlspecialchars($row[1]) . ":<br>";
        $subquery = "SELECT * FROM classics1 WHERE isbn='$row[1]'";
        $subresult = $conn->query($subquery);

        if (!$subresult) die ("Сбой при доступе к базе данных");

        $subrow = $subresult->fetch_array(MYSQLI_NUM);
        echo "&nbsp;&nbsp;" . htmlspecialchars("'$subrow[1]'") . " by " . 
        htmlspecialchars($subrow[0]) . "<br><br>";
    }
?>