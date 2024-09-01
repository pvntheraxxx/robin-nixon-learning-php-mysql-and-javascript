/* Пример 8.29. Объединение двух таблиц в одном запросе */
SELECT name,author,title FROM customers,classics1 
    WHERE customers.isbn=classics1.isbn;

SELECT name,author,title FROM customers
    JOIN classics1 ON customers.isbn=classics1.isbn;

SELECT name,author,title FROM
    customers AS cust, classics1 AS class WHERE cust.isbn=class.isbn;

SELECT name AS customer FROM customers ORDER BY customer;