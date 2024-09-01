/* Пример 8.6. Добавление столбца id с автоинкрементом при создании таблицы */
CREATE TABLE classics1 (
    author VARCHAR(128),
    title VARCHAR(128),
    type VARCHAR(16),
    year CHAR(4),
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY) ENGINE InnoDB;
