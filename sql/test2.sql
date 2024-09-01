/* Пример 8.4. Сеанс работы с MySQL: создание и проверка формата новой таблицы */
USE publications;
CREATE TABLE classics (
    author VARCHAR(128),
    title VARCHAR(128),
    type VARCHAR(16),
    year CHAR(4)) ENGINE InnoDB;
DESCRIBE classics;