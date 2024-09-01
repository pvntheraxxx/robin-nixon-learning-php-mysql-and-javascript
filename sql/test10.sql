/* Пример 8.14. Создание таблицы classics с первичным ключом */
CREATE TABLE classics3 (
    author VARCHAR(128),
    title VARCHAR(128),
    category VARCHAR(16),
    year SMALLINT,
    isbn CHAR(13),
    INDEX(author(20)),
    INDEX(title(20)),
    INDEX(category(4)),
    INDEX(year),
    PRIMARY KEY (isbn)) ENGINE InnoDB;
