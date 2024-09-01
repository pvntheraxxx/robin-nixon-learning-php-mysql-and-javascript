/* Пример 8.30. Использование логических оператор */
SELECT author,title FROM classics1 WHERE
    author LIKE 'Charles%' AND author LIKE '%Darwin';
SELECT author,title FROM classics1 WHERE 
    author LIKE '%Mark Twain%' OR author LIKE '%Samuel Langhorne Clemens%';
SELECT author,title FROM classics1 WHERE
    author LIKE 'Charles%' AND author NOT LIKE '%Darwin';