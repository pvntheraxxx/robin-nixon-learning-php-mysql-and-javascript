<!-- Пример 12.5. Открытие сессии после успешной аутентификации -->
<?php // new_authenticate2.php 
    require_once 'new_login.php'; // Подключаем файл с учётными данными для входа в БД

    // Создаём исключение с проверкой успешно ли произошло подключение к базе данных MySQL
    try
    {
        $pdo = new PDO($attr,$user,$pass,$opts); 
        // Создаём экземпляр класса PDO и передаём ему данные для входа в БД
        // PDO - специальный класс для подключения и взаимодействия с БД
        // Мы создаём экземпляр класса PDO в переменной $pdo
        // Соответственно, все методы и поля класса PDO
        // Будут доступны через переменную $pdo
    }
    catch (\PDOException $e)
    {
        throw new \PDOException($e->getMessage(),(int)$e->getCode()); // Действия в случае неудачи
    }

    // При помощи ветвления if проверяем значение в полях PHP_AUTH_USER и PHP_AUTH_USER
    // Переменная $_SERVER - это массив (array), содержащий такую информацию, как заголовки, пути и местоположения скриптов.
    // В массиве $_SERVER PHP_AUTH_USER и PHP_AUTH_PW - это поля, содержащие имя и пароль
    // Функция isset() проверяют есть ли значения у полей PHP_AUTH_USER и PHP_AUTH_PW
    if (isset($_SERVER['PHP_AUTH_USER']) &&
        isset($_SERVER['PHP_AUTH_PW']))
    {
        $un_temp = sanitise($pdo,$_SERVER['PHP_AUTH_USER']);
        $pw_temp = sanitise($pdo,$_SERVER('PHP_AUTH_PW'));
        // $un_temp и $pw_temp - это контейнеры, в которые погружаются
        // данные PHP_AUTH_USER и PHP_AUTH_PW после обработки (обезвреживания)
        // При помощи функции sanitise
        $query = "SELECT * FROM users WHERE username=$un_temp";
        // В переменную $query записывается запрос к БД через обработанное имя пользователя
        $result = $pdo->query($query);
        // В переменную $result записывается обращение к объекту PDO к свойству query
        // PDO::query — Подготавливает и выполняет выражение SQL без заполнителей
        // PDOStatement::rowCount — Возвращает количество строк, затронутых последним SQL-запросом

        if (!$result->rowCount()) die("User not found");
        // Если количество строк равно 0, строк нет, то выводим сообщение
        // PDOStatement::fetch — Извлечение следующей строки из результирующего набора
        $row = $result->fetch();
        // Создаём переменные $fn, $sn, $un, $pw, в которые помещаем результат работы fetch()
        $fn = $row['forename'];
        $sn = $row['surname'];
        $un = $row['username'];
        $pw = $row['password'];

        // password_verify — Проверяет, соответствует ли пароль хешу
        // str_replace — Заменяет вхождения строки поиска строкой замены
        // $pw_temp - переменная, в которой хранится значение пароля PHP_AUTH_PW
        // $pw тоже хранит в себе пароль пользователя
        // session_start — Стартует новую сессию, либо возобновляет существующую
        if (password_verify(str_replace("'", "", $pw_temp), $pw))
        {
            session_start();

            $_SESSION['forename'] = $fn;
            $_SESSION['surname'] = $sn;

            echo htmlspecialchars("$fn $sn : Hi $fn,
            you are now logged in as '$un'");
            die ("<p><a href='new_continue.php'>Click here to continue</a></p>");
        }
        else die("Invalid username/password combination");
    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Area"');
        header('HTTP/1.0 401 Unauthorized');
        die ("Please enter your username and password");
    }
    // Функция, которая обезвреживает введённые значения
    // htmlentities — Преобразовывает возможные символы в HTML-сущности
    // Она будет отсеивать вредоносные запросы
    // Она будет защищать от SQL-инъекций, от попыток взломать БД через объект PDO
    function sanitise($pdo,$str)
    {
      //  $str содержит в имя пользователя и пароль в полях PHP_AUTH_USER и PHP_AUTH_USER
      //  Соответственно функция html проверяет 
      //  Приемлемы ли значения в полях PHP_AUTH_USER и PHP_AUTH_USER
      //  PDO::quote — Заключает строку в кавычки для использования в запросе
        $str = htmlentities($str);
        return $pdo->quote($str); 
    }
?>