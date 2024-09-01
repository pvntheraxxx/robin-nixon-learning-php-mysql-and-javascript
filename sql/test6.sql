/* Пример 8.10. Добавление индексов к таблице classics */
ALTER TABLE classics1 ADD INDEX(author(20));
ALTER TABLE classics1 ADD INDEX(title(20));
ALTER TABLE classics1 ADD INDEX(category(4));
ALTER TABLE classics1 ADD INDEX(year);
DESCRIBE classics1;
