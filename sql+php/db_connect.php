<!-- Пример 10.2. Подключение к сеоверу MySQL с помощью mysqli -->
<?php
    require_once 'login.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if ($conn->connect_error) die("Fatal Error");
?> 