<!-- Пример 10.3. Отправка запроса к базе данных с помощью mysqli -->
<?php
    $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if (!$result) die ("Fatal Error");
?>