<!-- Пример 12.3. Создание таблицы users и добавление к ней -->
<?php
    require_once 'login.php';
    // define("DB_SERVER", "localhost");
    // define("DB_USER", "pvntheraxxx");
    // define("DB_PASSWORD", "123");
    // define("DB_DATABASE", "publications");
    

    $connection = new mysqli($hm,$un,$pw,$db);
    if ($connection->connect_error) die("Fatal Error");

    $query = "CREATE TABLE users (
        forename VARCHAR(32) NOT NULL,
        surname VARCHAR(32) NOT NULL,
        username VARCHAR(32) NOT NULL UNIQUE,
        password VARCHAR(32) NOT NULL
    )";

    $result = $connection->query($query);
    if (!$result) die("Fatal Error");

    $forename = 'Bill';
    $surname = 'Smith';
    $username = 'bsmith';
    $password = 'mysecret';
    $hash = password_hash($password,PASSWORD_DEFAULT);

    add_user($connection,$forename,$surname,$username,$hash);

    $forename = 'Pauline';
    $surname = 'Jones';
    $username = 'pjones';
    $password = 'acrobat';
    $hash = password_hash($password,PASSWORD_DEFAULT);

    add_user($connection,$forename,$surname,$username,$hash);

    function add_user($connection,$fn,$sn,$un,$pw)
    {
        $stmt=$connection->prepare('INSERT INTO users VALUES()');
        $stmt->bind_param('ssss',$fn,$sn,$un,$pw);
        $stmt->execute();
        $stmt->close();
    }

?>
