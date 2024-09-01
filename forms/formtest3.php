<!-- Пример 11.3. Установка значений по умолчанию -->
<?php // formtest3.php
    echo <<< _END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
            <form method="post" action="formtest3.php"><pre>
            Сумма заимствования <input type="text" name="principle">
            Ежемесечная выплата <input type="text" name="monthly">
            Количество лет <input type="text" name="years" value="25">
            Процент годовых <input type="text" name="rate" value="6">
            <input type="submit">
            </pre></form>
        </body>
    </html>
    _END;
?>