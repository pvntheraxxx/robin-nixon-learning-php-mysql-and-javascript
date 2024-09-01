<!-- Пример 11.1. formtest.php - простой обработчик формы на PHP -->
<?php // formtest.php
    echo <<< _END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
            <form method="post" action="formtest.php">
                Как Вас зовут?
                <input type="text" name="name">
                <input type="submit">
            </form>
        </body>
    </html>
    _END;
?>