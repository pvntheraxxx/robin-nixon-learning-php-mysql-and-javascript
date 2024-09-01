/* Пример 8.24. Использование конструкции MATCH...AGAINST с индексами FULLTEXT */
SELECT author,title FROM classics1
    WHERE MATCH(author,title) AGAINST('and');
SELECT author,title FROM classics1
    WHERE MATCH(author,title) AGAINST('curiosity shop');
SELECT author,title FROM classics1
    WHERE MATCH(author,title) AGAINST('tom sawyer');