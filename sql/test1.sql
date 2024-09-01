--  Пример 8.3. Создание таблицы под названием classics
CREATE TABLE classics (
    author VARCHAR(128),
    title VARCHAR(12),
    type VARCHAR(16),
    year CHAR(4)) ENGINE InnoDB;