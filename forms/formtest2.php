<!-- Пример 11.2. Обновлённая версия formtest.php -->
<?php // formtest2.php
    if (isset($_POST['name'])) $name = $_POST['name']; 
    // с помощью if и функции isset(), проверяем находится ли
    // в глобальной константке $_POST значение 'name'
    // isset() позволяет определить, инициализирована ли переменная 
    // $_POST - глобальный ассоциативный массив, которые передаётся на
    // страницу через HTTP метод POST
    else $name = "(Не введено)";
    echo <<< _END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
        Вас зовут: $name<br>
            <form method="post" action="formtest2.php">
                Как Вас зовут?
                <input type="text" name="name">
                <input type="submit">
            </form>
        </body>
    </html>
    _END;
?>