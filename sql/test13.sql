/* Пример 8.25. Использование MATCH...AGAINST в булевом режиме */
SELECT author,title FROM classics1
    WHERE MATCH(author,title)
    AGAINST('+charles -species' IN BOOLEAN MODE);
SELECT author,title FROM classics1
    WHERE MATCH(author,title)
    AGAINST('"origin of"' IN BOOLEAN MODE);