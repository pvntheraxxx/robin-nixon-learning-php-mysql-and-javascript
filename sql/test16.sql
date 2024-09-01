/* Пример 8.28. Создание и заполнение таблицы customers */
CREATE TABLE customers (
    name VARCHAR(128),
    isbn VARCHAR(13),
    PRIMARY KEY (isbn)) ENGINE InnoDB;

INSERT INTO customers(name,isbn)
    VALUES('Joe Bloggs','9780099533474');
INSERT INTO customers(name,isbn)
    VALUES('Mary Smith','9780582506206');
INSERT INTO customers(name,isbn)
    VALUES('Jack Wilson','9780517123201');

SELECT * from customers;

/* 
INSERT INTO customers(name,isbn) VALUES
    ('Joe Bloggs','9780099533474'),
    ('Mary Smith','9780582506206'),
    ('Jack Wilson','9780517123201'); */