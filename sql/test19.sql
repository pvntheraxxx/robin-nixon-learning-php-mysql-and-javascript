/* Пример 9.1. Создание таблицы, готовой к обработке транзакций */
CREATE TABLE accounts (
    number INT,
    balance FLOAT,
    PRIMARY KEY(number)
) ENGINE InnoDB;
DESCRIBE accounts;

/* Пример 9.2. Заполнение таблицы accounts */
INSERT INTO accounts(number,balance) VALUES(12345,1025.50);
INSERT INTO accounts(number,balance) VALUES(67890,140.00);
SELECT * FROM accounts;

/* Пример 9.3. Транзакция MySQL */
BEGIN;
UPDATE accounts SET balance=balance+25.11 WHERE number=12345;
COMMIT;
SELECT * FROM accounts;

/* Пример 9.4. Транзакция по переводу средств */
BEGIN;
UPDATE accounts SET balance=balance-250 WHERE number=12345;
UPDATE accounts SET balance=balance+250 WHERE number=67890;
SELECT * FROM accounts;

/* Пример 9.5. Отмена транзакции с помощью команды ROLLBACK */
ROLLBACK;
SELECT * FROM accounts;

/* Пример 9.6. Использование команды EXPLAIN */
EXPLAIN SELECT * FROM accounts WHERE number='12345';

/* Пример 9.9. Выгрузка всех баз данных MySQL в файл */
mysqldump -u root -uroot --all-databases > all_databases.sql

/* Пример 9.10. Восстановление полного набора баз данных */
mysql -u root -uroot < all_databases.sql

/* Пример 9.11. Восстановление базы данных publications */
mysql -u root -uroot -D publications < publications.sql

/* Пример 9.12. Восстановление таблицы classics в базе данных publications */
mysql -u root -uroot -D publications < classics.sql

/* Пример 9.13. Выгрузка данных в файлы формата CSV */
mysqldump -u root -uroot --no-create-info --tab=C:/test --fields-terminated-by=',' publications
    