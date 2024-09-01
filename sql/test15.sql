/* Пример 8.27. Использование ORDER BY */
SELECT author,title FROM classics1 ORDER BY author;
SELECT author,title FROM classics1 ORDER BY title DESC;

SELECT author,title,year FROM classics1 ORDER BY author,year DESC;
SELECT author,title,year FROM classics1 ORDER BY author ASC, year DESC;

SELECT category,COUNT(author) FROM classics1 GROUP BY category;