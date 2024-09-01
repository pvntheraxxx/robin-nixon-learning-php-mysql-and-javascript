/* Пример 8.13. Заполнение столбца isbn данными и использование первичного ключа */
ALTER TABLE classics1 ADD isbn CHAR(13);
UPDATE classics1 SET isbn='9781598184891' WHERE year='1876';
UPDATE classics1 SET isbn='9780582506206' WHERE year='1811';
UPDATE classics1 SET isbn='9780517123201' WHERE year='1856';
UPDATE classics1 SET isbn='9780099533474' WHERE year='1841';
UPDATE classics1 SET isbn='9780192814968' WHERE year='1594';
ALTER TABLE classics1 ADD PRIMARY KEY(isbn);
DESCRIBE classics1;