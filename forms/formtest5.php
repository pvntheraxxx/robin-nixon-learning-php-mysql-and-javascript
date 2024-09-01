<!-- Пример 11.5. Отправка нескольких значений с помощью массива -->
<?php // formtest4.php
    echo <<< _END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
            Ванильное <input type="checkbox" name="ice[]" value="Vanilla">
            Шоколадное <input type="checkbox" name="ice[]" value="Chocolate">
            Земляничное <input type="checkbox" name="ice[]" value="Strawberry">        
        </body>
    </html>
    _END;
?>