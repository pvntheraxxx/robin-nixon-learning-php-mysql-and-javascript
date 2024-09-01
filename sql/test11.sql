/* Пример 8.16. Две разные инструкции */
SELECT author,title FROM classics1;
SELECT title,isbn FROM classics1;

/* Пример 8.17. Подсчёт количества строк */
SELECT COUNT(*) FROM classics1;

/* Пример 8.18. Дублирование данных */
INSERT INTO classics1(author,title,category,year,isbn)
    VALUES('Charles Dickens','Little Dorrit','Fiction','1857','9780141439969');

/* Пример 8.19. Команда SELECT со спецификатором DISTINCT и без него */
SELECT author FROM classics1;
SELECT DISTINCT author FROM classics1;

/* Пример 8.20. Удаление новой записи */
DELETE FROM classics1 WHERE title='Little Dorrit';

/* Пример 8.21. Использование ключевого слова WHERE */
SELECT author,title FROM classics1 WHERE author="Mark Twain";
SELECT author,title FROM classics1 WHERE isbn="9781598184891";

/* Пример 8.22. Использование спецификатора LIKE */
SELECT author,title FROM classics1 WHERE author LIKE "Charles%";
SELECT author,title FROM classics1 WHERE title LIKE "%Species";
SELECT author,title FROM classics1 WHERE title LIKE "%and%";

/* Пример 8.23. Ограничение количества возвращаемых результатов */
SELECT author,title FROM classics1 LIMIT 3;
SELECT author,title FROM classics1 LIMIT 1,2;
SELECT author,title FROM classics1 LIMIT 3,1;
SELECT author,title FROM classics1 LIMIT 5;