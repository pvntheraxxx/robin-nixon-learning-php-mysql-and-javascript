/* Пример 10.18. Использование указателей мест заполнения */
PREPARE statement FROM "INSERT INTO classics1 VALUES(?,?,?,?)";

SET $author = "Emily Bronte",
    $title = "Wuthering Heights",
    $category = "Classic Fiction",
    $year = "1847",
    $isbn = "9780553212587";

EXECUTE statement USING $author,$title,$category,$year,$isbn;
DEALLOCATE PREPARE statement;