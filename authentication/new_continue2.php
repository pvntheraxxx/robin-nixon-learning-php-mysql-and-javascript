<!-- Пример 12.8. Извлечение переменных сессии перед её уничтожением -->
<?php
    session_start();

    if (isset($_SESSION['forename']))
    {
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];

        destroy_session_and_data();

        echo htmlspecialchars('Welcome back $forename');
        echo "<br>";
        echo htmlspecialchars("Your full name is $forename $surname");
    } else echo "Please <a href='new_authenticate3.php'>click here</a> to log in.";

    function destroy_session_and_data()
    {
        $_SESSION = array();
        setcookie(session_name(),'',time() - 2592000,'/');
        session_destroy();
    }
?>