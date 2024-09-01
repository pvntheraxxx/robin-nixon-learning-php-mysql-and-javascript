<!-- Пример 10.4. Поэлементное извлечение результатов -->
<?php
    require_once 'login.php';
    $connection = new mysqli($hn,$un,$pw,$db);
    // Подключаем файл login.php с пользовательскими данными MySQL
    // Создаём переменную $connection и создаём класс с пользовательскими данными для входа в БД

    if ($connection->connect_error) die("Fatal Error");
    // При помощи условия if проверяем не находится ли на свойстве класса значение 0
    // Проще говоря, вызываем из $connection метод connect_error, который содержит информацию, есть ли ошибка 

    $query = "SELECT * FROM classics";
    $result = $connection->query($query);
    // Создаём две переменные, в переменной $query($запрос) будет храниться код запроса к базе данных MySQL
    // А в переменной $result будет находиться результат метода query, который вызывается из $connection
    // Более того мы обращаемся именно к методам класса mysqli(), который находится в переменной $connection
    // Именно класс mysqli позволяет через $connection обращаться к методу для работы с базой данных query()
    
    if (!$result) die ("Fatal Error");
    // Используя конструкцию if, проверяем завершилась ли вся череда вызовов успешно или нет
    // И если нет, то выводим сообщение об ошибки

    $row = $result->num_rows;
    // Создаём переменну $row ($ряд) и помещаем туда свойство num_rows из переменной $result
    // num_rows - это свойство, которое находится в переменной $result

    for ($j = 0;$j < $rows; ++$j)
    {
        $result->data_seek($j);
        echo 'Author: ' .htmlspecialchars($result->fetch_assoc()['author']) . '<br>';
        $result->data_seek($j);
        echo 'Title: ' .htmlspecialchars($result->fetch_assoc()['title']) . '<br>';
        $result->data_seek($j);
        echo 'Category: ' .htmlspecialchars($result->fetch_assoc()['category']) . '<br>';
        $result->data_seek($j);
        echo 'Year: ' .htmlspecialchars($result->fetch_assoc()['year']) . '<br>';
        $result->data_seek($j);
        echo 'ISBN: ' .htmlspecialchars($result->fetch_assoc()['isbn']) . '<br>';
    }

    // Создаём цикл for и задаём условия, что к параметру $j должно прибавляться по единице 
    // До тех пор, пока параметр $j меньше чем значение переменной $rows 
    // Затем, внутри цикла, обращаемся к методу data_seek(), который находится в переменной $result 

    $result->close();
    $connection->close();
?>