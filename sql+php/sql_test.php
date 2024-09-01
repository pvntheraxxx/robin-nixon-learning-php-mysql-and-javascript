<!-- Пример 10.6. Вставка и удаление данных с помощью программы sql_test.php -->
<?php

    define("DB_SERVER", "localhost");
    define("DB_USER", "pvntheraxxx");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "publications");

    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    
    
    if ($conn->connect_error) die("Fatal Error");

    if (isset($_POST['delete']) && isset($_POST['isbn']))
    {
        $isbn = get_post($conn,'isbn');    
        $query = "DELETE FROM classics1 WHERE isbn='$isbn'";
        $result = $conn->query($query);
        if (!$result) echo "Сбой при удалении данных<br><br>";
    }

    if (
        isset($_POST['author']) &&
        isset($_POST['title']) &&
        isset($_POST['category']) &&
        isset($_POST['year']))
    {
        $author = get_post($conn,'author');
        $title = get_post($conn,'title');
        $category = get_post($conn,'category');
        $year = get_post($conn,'year');
        $isbn = get_post($conn, 'isbn');
        $query = "INSERT INTO classics1 VALUES"
        . "('$author','$title','$category','$year','$isbn')";
        $result = $conn->query($query);
        if (!$result) echo "Сбой при вставке данных<br><br/>";
    }
    echo <<<_END
        <form action="sql_test.php" method="post"><pre>
            Author <input type="text" name="author">
            Title <input type="text" name="title">
            Category <input type="text" name="category">
            Year <input type="text" name="year">
            ISBN <input type="text" name="isbn">
                <input type="submit" value="ADD RECORD"> // Кнопка ДОБАВИТЬ ЗАПИСЬ
            </pre>
        </form>
    _END;

    $query = "SELECT * FROM classics1";
    $result = $conn->query($query);
    if (!$result) die ("Сбой при доступе к базе данных");

    $rows = $result->num_rows;

    for ($j = 0;$j < $rows;++$j)
    {   
        $row = $result->fetch_array(MYSQLI_NUM);
        
        $r0 = htmlspecialchars($row[0]);
        $r1 = htmlspecialchars($row[1]);
        $r2 = htmlspecialchars($row[2]);
        $r3 = htmlspecialchars($row[3]);
        $r4 = htmlspecialchars($row[4]);

        echo <<< _END
        <pre>
            Author $r0
            Title $r1
            Category $r2
            Year $r3
            ISBN $r4
        </pre>
        <form action='sql_test.php' method='post'>
            <input type='hidden' name='delete' value='yes'>
            <input type='hidden' name='isbn' value='$r4'>
            <input type='submit' value='DELETE RECORD'></form> // Кнопка УДАЛИТЬ ЗАПИСЬ
        _END;
    }

    $result->close();
    $conn->close();

    function get_post($conn,$var)
    {
        return $conn->real_escape_string($_POST[$var]);
    }
?>