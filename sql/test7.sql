/* Пример 8.11. Эти две команды эквивалентны */
ALTER TABLE classics ADD INDEX(author(20));
CREATE INDEX author ON classics (author(20));